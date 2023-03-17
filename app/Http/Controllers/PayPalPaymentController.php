<?php
namespace App\Http\Controllers;
use App\Models\Courses;
use App\Models\CoursesRegister;
use App\Models\Runners;
use App\Models\Insurances;
use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use PayPal;
use PDF;
use Srmklive\PayPal\Services\ExpressCheckout;

class PayPalPaymentController extends Controller
{
    public function handlePayment($id, Request $request)
    {
        $runners = Runners::where('dni',$request['dni'])->get();
        if(count($runners) > 0) {
            $course = Courses::where('id',$id)->first();
            $runners = Runners::where('dni',$request['dni'])->first();
            $coursesRegister = CoursesRegister::where('dni_runners',$request['dni'])->first();
            if($runners && !$coursesRegister){
                $idInsurance = Insurances::where('id', $request['insurance'])->first();
                $product = [];
                $product['items'] = [
                    [
                        'name' => $course['name'],
                        'price' => $course['price'],
                        'desc'  => $course['description'],
                        'qty' => 1
                    ]
                ];
        
                

                $product['invoice_id'] = 1;
                $product['invoice_description'] = "Inscripción en ".$course['name'];
                $product['return_url'] = route('success.payment',['id' => $id, 'dni' => $request['dni'], 'insurance_id' => $request['insurance']]);
                $product['cancel_url'] = route('cancel.payment');
                $product['total'] = $course['price'];
        
                $paypalModule = new ExpressCheckout;
        
                $res = $paypalModule->setExpressCheckout($product, true);
        
                return redirect($res['paypal_link']);

            }else{
                $insurances = Insurances::get();
                $course = Courses::where('id',$id)->first();
                
                return redirect()->route('courses.registerWithIDForm',['idCourse' => $id, 'userExists' => '1', 'registerExists' => 'true']);
            }

        }   
        else {
            $insurances = Insurances::get();

            $course = Courses::where('id',$id)->first();
            return redirect()->route('courses.registerWithIDForm',['idCourse' => $id, 'userExists' => 'false']);
        }
        
    }
   
    public function paymentCancel()
    {
        dd('Your payment has been declend. The payment cancelation page goes here!');
    }
  
    public function paymentSuccess($id,$dni,$insurance_id, Request $request, CoursesRegister $register)
    {
        $paypalModule = new ExpressCheckout;
        $response = $paypalModule->getExpressCheckoutDetails($request->token);
  
        if (in_array(strtoupper($response['ACK']), ['SUCCESS', 'SUCCESSWITHWARNING'])) {

            $coursesRegister = CoursesRegister::latest('created_at')->first();

            if($coursesRegister == null) {
                $dorsal = 1;
            }
            else {
                $dorsal = $coursesRegister['dorsal'] + 1;
            }

            $qr = QrCode::generate($id,$dni);

            $register->create([
                'id_courses' => $id,
                'dni_runners' => $dni,
                'dorsal'     => $dorsal,
                'insurance'  => $insurance_id,
            ]);

            return redirect()->route('payment.summary', ['course_id' => $id, 'dni' => $dni, 'insurance_id' => $insurance_id]);
        }
  
        dd('Error occured!');
    }

    public function paymentSummary($id,$dni,$insurance_id) {

        $course = Courses::where('id',$id)->first();
        $runner = Runners::where('dni',$dni)->first();
        $insurance = Insurances::where('id',$insurance_id)->first();

        return view('Courses.paymentSuccessful', [
            'course' => $course,
            'runner' => $runner,
            'insurance' => $insurance,
        ]);
    }

}