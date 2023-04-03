<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Requests\Soal\StoreRequest;
use App\Http\Requests\Soal\UpdateRequest;
use App\Models\Soal;
use App\Enums\RoleEnum;
use Auth;

class SoalController extends Controller
{
    public function __construct(){
        $this->route = "dashboard.soal.";
        $this->view = "dashboard.pages.ayo-berwawasan.soal.";
        $this->soal = new Soal();
    }

    public function index(Request $request)
    {

        $table = $this->soal;
        $table = $table->orderBy("created_at","DESC");
        $table = $table->get();

        $data = [
            'table' => $table,
        ];

        return view($this->view."index",$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view($this->view."create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {
        try {
            $question = $request->question;
            $answer_a = $request->answer_a;
            $answer_b = $request->answer_b;
            $answer_c = $request->answer_c;
            $answer_d = $request->answer_d;
            $answer_e = $request->answer_e;

            $create = $this->soal->create([
                'question' => $question,
                'answer_a' => $answer_a,
                'answer_b' => $answer_b,
                'answer_c' => $answer_c,
                'answer_d' => $answer_d,
                'answer_e' => $answer_e,
            ]);

            alert()->html('Berhasil','Data berhasil ditambahkan','success'); 
            return redirect()->route($this->route."index");

        } catch (\Throwable $e) {
            Log::emergency($e->getMessage());

            alert()->html('Gagal',$e->getMessage(),'error');
            return redirect()->back()->withInput();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $result = $this->soal;
        $result = $result->where('id',$id);
        $result = $result->first();

        if(!$result){
            alert()->error('Gagal',"Data tidak ditemukan");
            return redirect()->route($this->route."index");
        }

        $data = [
            'result' => $result,
        ];

        return view($this->view."show",$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $result = $this->soal;
        $result = $result->where('id',$id);
        $result = $result->withTrashed();
        $result = $result->first();

        if(!$result){
            alert()->error('Gagal',"Data tidak ditemukan");
            return redirect()->route($this->route."index");
        }

        $data = [
            'result' => $result,
        ];

        return view($this->view."edit",$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRequest $request,$id)
    {
        try {

            $result = $this->soal;
            $result = $result->where('id',$id);
            $result = $result->first();

            if(!$result){
                throw new Error("Data tidak ditemukan");
            }

            $question = $request->question;
            $answer_a = $request->answer_a;
            $answer_b = $request->answer_b;
            $answer_c = $request->answer_c;
            $answer_d = $request->answer_d;
            $answer_e = $request->answer_e;

            $update = $result->update([
                'question' => $question,
                'answer_a' => $answer_a,
                'answer_b' => $answer_b,
                'answer_c' => $answer_c,
                'answer_d' => $answer_d,
                'answer_e' => $answer_e,
            ]);

            alert()->html('Berhasil','Data berhasil update','success'); 
            return redirect()->route($this->route."index");

        } catch (\Throwable $e) {
            Log::emergency($e->getMessage());

            alert()->html('Gagal',$e->getMessage(),'error');
            return redirect()->back()->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $result = $this->soal;
            $result = $result->where('id',$id);
            $result = $result->first();

            if(!$result){
                alert()->error('Gagal',"Data tidak ditemukan");
                return redirect()->route($this->route."index");
            }

            $result->delete();

            alert()->html('Berhasil','Data berhasil dihapus','success'); 
            return redirect()->route($this->route."index");

        } catch (\Throwable $e) {
            Log::emergency($e->getMessage());

            alert()->error('Gagal',$e->getMessage());
            return redirect()->route($this->route."index");
        }
    }

}
