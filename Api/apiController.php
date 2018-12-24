<?php
namespace App\Http\Controllers\Backend;

use App\Examp;
use App\ExamRoom;
use App\ExamShift;
use App\ExamShiftRoom;
use App\ExamRegister;
use App\User;
use Carbon\Carbon;
use Image;
use Storage;
use Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use File;
use phpDocumentor\Reflection\Types\Null_;
use Symfony\Component\HttpFoundation\File\Exception\FileException;

class ApiController extends Controller
{
public function getCathi(Examp $examp)
    {
        $shifts  = ExamShift::where('exam_id',$examp->id)->get();
        $html = '<option value="">Chọn ca thi</option>';
        if (count($shifts) > 0) {
            foreach ($shifts as $shift) {
                $html .= '<option value="' . $shift->id . '">' . $shift->name . '</option>';
            }
        } else {
            $html .= '<option>Không có ca thi nào</option>';
        }
        return $html;
    }
}
