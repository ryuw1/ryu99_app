<?
use Illuminate\Http\Request;
use App\Models\Todo;
class TodoController extends Controller
{
    public function remove_multi(Request $request){

        // eloquentによる複数削除
        Todo::destroy($request->id);    //複数データ削除（IDは配列で複数）

    }  //end funtion 
}
