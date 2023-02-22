<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MenuHead;
use App\Models\PdfFile;
use App\Models\VideoSolution;
use App\Models\ResourceFolderPdf;
use App\Models\ResourcePdf;
use App\Models\User;
use App\Models\Subject;
use App\Models\Chapter;
use App\Models\topicalChapter;
use App\Models\SubSubCategory;

class HelperController extends Controller
{
    public function change_status( Request $request,$type,$id,$column)
    {
         $status = $request->status;

        switch ($type) {
            case "user":
              $menuhead = User::where('id', $id)
              ->update([$column => $status]);
            break;
            case "menuhead":
                $menuhead = MenuHead::where('id', $id)
                ->update([$column => $status]);
              break;
            case "subsubcat":
              $pdf = SubSubcategory::where('id', $id)
              ->update([$column => $status]);
              break;
            case "subject":
              $pdf = Subject::where('id', $id)
              ->update([$column => $status]);
              break;
            case "chapter":
                $pdf = Chapter::where('id', $id)
                ->update([$column => $status]);
                break;
            case "topicalchapter":
                $pdf = TopicalChapter::where('id', $id)
                ->update([$column => $status]);
                break;
            case "pdfnote":
              $pdf = PdfFile::where('id', $id)
              ->update([$column => $status]);
              break;
            case "videosolution":
              $pdf = VideoSolution::where('id', $id)
              ->update([$column => $status]);
              break;
            case "folderpdf":
              $pdf = ResourceFolderPdf::where('id', $id)
              ->update([$column => $status]);
              break;
            case "resourcepdf":
              $pdf = ResourcePdf::where('id', $id)
              ->update([$column => $status]);
              break;
            default:
              echo "Your favorite color is neither red, blue, nor green!";
          }
          return response()->json(['success'=>'success']);

    }
}
