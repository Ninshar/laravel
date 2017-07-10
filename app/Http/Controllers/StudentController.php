<?php
/**
 * Created by PhpStorm.
 * User: H
 * Date: 2017/7/7
 * Time: 16:20
 */

namespace App\Http\Controllers;


use App\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function query4(){


        //增加
//        $bool = DB::insert('insert into student(name, age) values(?, ?)',
//            ['夏明',21]);
//        var_dump($bool);
//
//        //修改
//        $bool = DB::update('update student set age = ? where id = ?',
//            [19, 1001]);
//        var_dump($bool);
//
//        //查询
//           $student = DB::select('select * from student where id > ?',[1001]);
//           dd($student);
//
//        //删除
//           $student = DB::delete('delete from student where id > ?',[1001]);
//           dd($student);
    }
    public  function query5(){
        //table添加
//        $bool = DB::table('student')->insert(
//            ['name' => '林夕' , 'age' =>18]
//        );
//        var_dump($bool);

        //添加后获取id
//        $id = DB::table('student')->insertGetId(
//            ['name' => '司马懿' , 'age' =>60]
//        );
//        var_dump($id);

        //添加多条
//        $bool = DB::table('student')->insert([
//            ['name' => '郭嘉' , 'age' =>24],
//            ['name' => '荀令君' , 'age' =>32],
//            ['name' => '主簿' , 'age' =>19]
//        ]);
//        var_dump($bool);

        //根据条件修改
//        $bool = DB::table('student')->where('id', 1003)->update(['age' => 30]);
//        var_dump($bool);

        //修改单个字段加加
//        $num = DB::table('student')
//            ->where('id', 1003)
//            ->increment('age',3);
//        var_dump($num);

        //修改单个字段减减
//        $num = DB::table('student')
//            ->where('id', 1003)
//            ->decrement('age',3);
//        var_dump($num);

//        修改多个字段
//        $num = DB::table('student')
//            ->where('id', 1003)
//            ->decrement('age',3, ['name' => '嘻嘻嘻嘻嘻']);
//        var_dump($num);

//        条件删除
//        $num = DB::table('student')
//            ->where('id',1007)
//            ->delete();
//        var_dump($num);

//        条件删除
//        $num = DB::table('student')
//            ->where('id', '>=',1007)
//            ->delete();
//        var_dump($num);

//        条件删除
//        $num = DB::table('student')
//            ->where('id', '>=',1007)
//            ->delete();
//        var_dump($num);
    }

    public function query6(){
//        $delete1 = DB::table('student')
//            ->where('id',1004)
//            ->delete();
//        if($delete1 == 1){
//            return '删除成功';
//        }else if($delete1 == 0){
//            return '没有这条数据';
//        }else{
//            return '删除失败';
//        }
//        var_dump($delete1);
//        删除表
//        DB::table('students')->truncate();

//        $student = DB::table('student')->get();
//        dd($student);


    }

    public function orm1(){

//        $student = Student::all();

//        $student = Student::findOrFail(1004);

//        dd($student);
//        $student = Student::get();
//
//        var_dump($student);

    }
    public function orm2(){
//        $student = new Student();
//        $student->name = 'xuxu';
//        $student->age  = 39;
//        $bool = $student->save();
//
//        dd($bool);
//        $student = Student::find(1012);

//        echo date( $student->created_at);
//        调用时间格式化
//        echo date('Y-m-d H:i:s', $student->created_at);

//        使用模型添加
//        $student = Student::create(
//            ['name'=>'理想','age' => 19]
//        );
//        dd($student);
        $student = Student::get();
        return view('dome',[
            'students' => $student
        ]);
    }
    public function request1(Request $request)
    {
        $name = $request->input("name");

        return view('domes.request',[
            'name' => $name
        ]);
    }
}
















































