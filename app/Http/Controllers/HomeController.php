<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Http\Request;
use App\model_cs;
use App\csoprapen;
use App\ppjkpending;
use App\trucking;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use DB;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        $day = Carbon::now()->format('y/m/d');
        $d=model_cs::count();
        $c = model_cs::where('created_at', 'LIKE', '%' . $day . '%')->count();
        $s=model_cs::select(DB::raw('MONTH(created_at) as date'), 
               DB::raw('count(*) as id'))->groupBy('date')->first();
        $r=model_cs::select(DB::raw('DAY(created_at) as n'),DB::raw('count(*) as created_at'))->groupBy('n')->get();   
        $rd=model_cs::select(DB::raw('DATE(created_at) as date'), 
               DB::raw('count(*) as id'))->groupBy('date')->take(10)->get();
               return view('home',compact('d','s','c','day','r'),array('rd' => $rd));
      }
        public function ins(){
       $ini = model_cs::OrderBy('created_at','desc')->paginate(10000);
        return view('datas',compact('ini'));
    }
    public function show($id){
        $i=model_cs::findorfail($id);
        return $i;
    }
    public function showdata(){
        $uu = model_cs::OrderBy('id','desc')->paginate(200);
           if(Auth::User()->type == 'admin' ){
               return view('datas',compact('uu'));
           }
           elseif(Auth::User()->type == 'cs') {
              return view('datas',compact('uu'));
           }
           elseif(Auth::User()->type == 'csopcs') {
                return view('datacsops',compact('uu'));
           }
           elseif (Auth::User()->type == 'ppjk') {
                return view('dataforppjk',compact('uu'));
           }
           elseif(Auth::User()->type == 'trucking'){
                return view('truckingddatas',compact('uu'));
           }
           else {
               return redirect('/home');
           }
        return view('home',compact($uu));
           }
    public function skc(){
           if(Auth::User()->type == 'admin' ){
               return view('admin');
           }
           elseif(Auth::User()->type == 'cs') {
               return view('cs');
           }
           elseif (Auth::User()->type == 'csopcs') {
               return view('searchForcsoprator');
           }
           elseif(Auth::User()->type == 'ppjk') {
                return view('searchForPPJK');
           }
           elseif(Auth::User()->type == 'trucking'){
                return view('srctracking');
           }
           else {
            
               return redirect('/home');
           }
    }
    public function del($id){
                  $encrypt=Crypt::decrypt($id);
                  $datid=model_cs::findOrFail($encrypt);
                  $datid->delete();
                  return redirect('/datas');
    }
    public function inptRecs(Request $Request){
         if(Auth::User()->type == 'admin' ){
               return view('admin');
           }
           elseif(Auth::User()->type == 'cs') {
                 $n                        = new model_cs();
                 $n->csname                = Auth::User()->name;
                 $n->bl_number             = $Request->Get('bl_number');
                 $n->ponumber              = $Request->Get('ponumber');
                 $n->no_job                = $Request->Get('no_job');
                 $n->ibd_num               = $Request->Get('ibd_num');
                 $n->tglterimaibd          = $Request->get('tglterimaibd');
                 $n->businesunit           = $Request->get('businesunit');
                 $n->descofgoods           = $Request->get('descofgoods');
                 $n->pre_alert             = $Request->get('pre_alert');
                 $n->city                  = $Request->get('city');
                 $n->docs_coml_date        = $Request->get('docs_coml_date');
                 $n->inv_num               = $Request->get('inv_num');
                 $n->pre_alert             = $Request->get('pre_alert');
                 $n->inv_date              = $Request->get('inv_date');
                 $n->branch                = $Request->get('branch');
                 $n->prtofdiscarge         = $Request->get('prtofdiscarge');
                 $n->shipper               = $Request->get('shipper');
                 $n->consigne              = $Request->get('consigne');
                 $n->notify                = $Request->get('notify');
                 $n->supplier              = $Request->get('supplier');
                 $n->lartas                = $Request->get('lartas');
                 $n->type                  = $Request->get('type_permit');
                 $n->permit_star           = $Request->get('permit_star');
                 $n->permit_ready          = $Request->get('permit_ready');
                 $n->jenisbl               = $Request->get('jenisbl');
                 $n->softcopy              = $Request->get('softcopy');
                 $n->tglteimasoft          = $Request->get('tglteimasoft');
                 $n->hardcopy              = $Request->get('hardcopy');
                 $n->tgltrimahard          = $Request->get('tgltrimahard');
                 $n->carier                = $Request->get('carier');
                 $n->pieces                = $Request->get('pieces');
                 $n->pkg                   = $Request->get('pkg');
                 $n->grossweight           = $Request->get('grossweight');
                 $n->cubicmeter            = $Request->get('cubicmeter');
                 $n->texabeleweight        = $Request->get('texabeleweight');
                 $n->atd                   = $Request->get('atd');
                 $n->eta                   = $Request->get('eta');
                 $n->ata                   = $Request->get('ata');
                 $n->total_container_20    = $Request->get('total_container_20');
                 $n->total_container_20ref = $Request->get('total_container_20ref');
                 $n->total_container_40    = $Request->get('total_container_40');
                 $n->total_container_40h   = $Request->get('total_container_40h');
                 $n->total_container_40ref = $Request->get('total_container_40ref');
                 $n->total_container_45    = $Request->get('total_container_45');
                 $n->sum_container         = $Request->get('sum_container');
                 $n->total_teus            = $Request->get('total_teus');
                 $n->cipl                  = $Request->get('cipl');
                 $n->coo                   = $Request->get('coo');
                 $n->insurance             = $Request->get('insurance');
                 $n->coa                   = $Request->get('coa');
                 $n->hc                    = $Request->get('hc');
                 $n->phyto                 = $Request->get('phyto');
                 $n->ls                    = $Request->get('ls');
                 $n->rekombpom             = $Request->get('rekombpom');
                 $n->kt2                   = $Request->get('kt2');
                 $n->kt9                   = $Request->get('kt9');
                 $n->responlartas          = $Request->get('responlartas');
                 $n->Recs_respon_lartas    = $Request->get('Recs_respon_lartas');
                 $n->save();
                 return redirect('/datas');
                }
           elseif (Auth::User()->type == 'csopcs') {
               return view('cs_ops');
           }
           elseif(Auth::User()->type == 'ppjk') {
                return view('ppjk');
           }
           elseif(Auth::User()->type == 'trucking'){
                return view('trucking');
           }
           else {
               return redirect('/home');
           }
    }
    public function showd($id){
       $encrypt=Crypt::decrypt($id);
       $o = model_cs::findOrFail($encrypt);
        return view('showdst')->with('o', $o);
    }

    public function editl($id){
            $encrypt=Crypt::decrypt($id);
           $o = model_cs::findOrFail($encrypt);
            if(Auth::User()->type == 'admin' ){
               return view('admin');
           }
           elseif(Auth::User()->type == 'cs') {
               return view('cs_edit',compact('o'));
           }
           elseif (Auth::User()->type == 'csopcs') {
               return view('cs_ops',compact('o'));
           }
           elseif(Auth::User()->type == 'ppjk') {
                return view('ppjk',compact('o'));
           }
           elseif(Auth::User()->type == 'trucking'){
                return view('tracking',compact('o'));
           }
           else {
           return redirect('/home');
           }
    }
    public function uptodt(Request $request, $id){
            $encrypt=Crypt::decrypt($id);
            if(Auth::User()->type == 'admin' ){
               return view('admin');
            }
           elseif(Auth::User()->type == 'cs') {
                 $n=model_cs::findorfail($encrypt);
                 $n->csname                = Auth::User()->name;
                 $n->bl_number             = $Request->get('bl_number');
                 $n->ponumber              = $Request->get('ponumber');
                 $n->no_job                = $Request->get('no_job');
                 $n->ibd_num               = $Request->get('ibd_num');
                 $n->tglterimaibd          = $Request->get('tglterimaibd');
                 $n->businesunit           = $Request->get('businesunit');
                 $n->descofgoods           = $Request->get('descofgoods');
                 $n->pre_alert             = $Request->get('pre_alert');
                 $n->city                  = $Request->get('city');
                 $n->docs_coml_date        = $Request->get('docs_coml_date');
                 $n->inv_num               = $Request->get('inv_num');
                 $n->pre_alert             = $Request->get('pre_alert');
                 $n->inv_date              = $Request->get('inv_date');
                 $n->branch                = $Request->get('branch');
                 $n->prtofdiscarge         = $Request->get('prtofdiscarge');
                 $n->shipper               = $Request->get('shipper');
                 $n->consigne              = $Request->get('consigne');
                 $n->notify                = $Request->get('notify');
                 $n->supplier              = $Request->get('supplier');
                 $n->lartas                = $Request->get('lartas');
                 $n->type                  = $Request->get('type_permit');
                 $n->permit_star           = $Request->get('permit_star');
                 $n->permit_ready          = $Request->get('permit_ready');
                 $n->jenisbl               = $Request->get('jenisbl');
                 $n->softcopy              = $Request->get('softcopy');
                 $n->tglteimasoft          = $Request->get('tglteimasoft');
                 $n->hardcopy              = $Request->get('hardcopy');
                 $n->tgltrimahard          = $Request->get('tgltrimahard');
                 $n->carier                = $Request->get('carier');
                 $n->pieces                = $Request->get('pieces');
                 $n->pkg                   = $Request->get('pkg');
                 $n->grossweight           = $Request->get('grossweight');
                 $n->cubicmeter            = $Request->get('cubicmeter');
                 $n->texabeleweight        = $Request->get('texabeleweight');
                 $n->atd                   = $Request->get('atd');
                 $n->eta                   = $Request->get('eta');
                 $n->ata                   = $Request->get('ata');
                 $n->total_container_20    = $Request->get('total_container_20');
                 $n->total_container_20ref = $Request->get('total_container_20ref');
                 $n->total_container_40    = $Request->get('total_container_40');
                 $n->total_container_40h   = $Request->get('total_container_40h');
                 $n->total_container_40ref = $Request->get('total_container_40ref');
                 $n->total_container_45    = $Request->get('total_container_45');
                 $n->sum_container         = $Request->get('sum_container');
                 $n->total_teus            = $Request->get('total_teus');
                 $n->cipl                  = $Request->get('cipl');
                 $n->coo                   = $Request->get('coo');
                 $n->insurance             = $Request->get('insurance');
                 $n->coa                   = $Request->get('coa');
                 $n->hc                    = $Request->get('hc');
                 $n->phyto                 = $Request->get('phyto');
                 $n->ls                    = $Request->get('ls');
                 $n->rekombpom             = $Request->get('rekombpom');
                 $n->kt2                   = $Request->get('kt2');
                 $n->kt9                   = $Request->get('kt9');
                 $n->responlartas          = $Request->get('responlartas');
                 $n->Recs_respon_lartas    = $Request->get('Recs_respon_lartas');
                 $n->update();
                 return redirect('/datas');
            }
           elseif (Auth::User()->type == 'csopcs') {
                 $uns=model_cs::findorfail($encrypt);
                 $uns->lokasigudang         = $request->get('lokasigudang');
                 $uns->planpickupdo         = $request->get('planpickupdo');
                 $uns->pengantardo          = $request->get('pengantardo');
                 $uns->actualdo             = $request->get('actualdo');
                 $uns->noa                  = $request->get('noa');
                 $uns->finishstripinf       = $request->get('finishstripinf');
                 $uns->gateoutcy            = $request->get('gateoutcy');
                 $uns->level1               = $request->get('level1');
                 $uns->level2               = $request->get('level2');
                 $uns->jobstatus            = $request->get('jobstatus');
                 $uns->remarkjob            = $request->get('remarkjob');
                 $uns->departemen           = $request->get('departemen');
                 $uns->csopraname           = Auth::User()->name;
                 $uns->update();
               return redirect('/datas');
             }
           elseif(Auth::User()->type == 'ppjk') {
                 $upd=model_cs::findorfail($encrypt);
                 $upd->tgl_create_pib      = $request->get('tgl_create_pib');
                 $upd->ajunumber           = $request->get('ajunumber');
                 $upd->manifest            = $request->get('manifest');
                 $upd->bc11                = $request->get('bc11');
                 $upd->pibaprofdata        = $request->get('pibaprofdata');
                 $upd->inputtglinftransfer = $request->get('inputtglinftransfer');
                 $upd->resc_sppb           = $request->get('resc_sppb');
                 $upd->ppjkname            = Auth::User()->name;
                 $upd->update();
               return redirect('/datas');
           }
           elseif(Auth::User()->type == 'trucking'){
                $opl=model_cs::findorfail($encrypt);
                $opl->nosuratjl             = $request->get('nosuratjl');
                $opl->tgldelevery           = $request->get('tgldelevery');
                $opl->tglunloading          = $request->get('tglunloading');
                $opl->tglretrnemptcontainer = $request->get('tglretrnemptcontainer');
                $opl->namasupir             = $request->get('namasupir');
                $opl->notelephone           = $request->get('notelephone');
                $opl->jmluangjln            = $request->get('jmluangjln');
                $opl->trackname             = Auth::User()->name;
                $opl->update();
                return redirect('datas');
           }
           else {
           return redirect('/home');
           }
    }
    public function src(Request $request){
         $query = $request->get('Src');
         $ich="Search $query";
         $o = model_cs::where('no_job', 'LIKE', '%' . $query . '%')->first();

        if(Auth::User()->type == 'admin' ){
               return view('admin');
           }
           elseif(Auth::User()->type == 'cs') {
               return view('cs_edit',compact('o'));
           }
           elseif (Auth::User()->type == 'csopcs') {
               if ($o == null) {
            return view('searchForcsoprator');
          }
          return view('cs_ops')->with('o', $o);
           }
           elseif(Auth::User()->type == 'ppjk') {
                if ($o == null) {
           return view('searchForPPJK');
          }
           return view('ppjk')->with('o', $o);
           }
           elseif(Auth::User()->type == 'trucking'){
              if ($o == NULL ){
              return view('srctracking');
                       }
                  return view('tracking')->with('o', $o);
                      }
           else {
           return redirect('/home');
           }
           }
           public function pending(Request $request){
            if(Auth::User()->type == 'admin'){
                 
            }
            elseif(Auth::User()->type == 'cs'){
              $we=new ppjkpending();
              $we->jobnumber =$request->get('jobnumber');
              $we->csname     =$request->get('csname');
              $we->sesion      =$request->get('token');
              $we->save();
              return redirect('datas');

            }
            elseif(Auth::User()->type == 'csopcs'){
                $opl            = new trucking();
                $opl->jobnumber =$request->get('jobnumber');
                $opl->cs_oprator =$request->get('name');
                $opl->sesion    =$request->get('token');
                $opl->save();
                return redirect('datas');

            }
            elseif(Auth::User()->type == 'ppjk'){
                  $opl            = new csoprapen();
                  $opl->job_number =$request->get('job_number');
                  $opl->ppjk_name =$request->get('f');
                  $opl->sesion    =$request->get('x');
                  $opl->save();
                  return redirect('datas');
            }
            elseif(Auth::User()->type == 'trucking'){
            }else{
                    return redirect('/home');
            }
           }
           public function pendhd(Request $request){  
             if(Auth::User()->type == 'admin'){
            }
            elseif(Auth::User()->type == 'cs'){ 
            }
            elseif(Auth::User()->type == 'csopcs'){
                 $ino=csoprapen::OrderBy('id','desc')->paginate(1000);
                 return view('pending',compact('ino'));
            }
            elseif(Auth::User()->type == 'ppjk'){
                  $ii=ppjkpending::OrderBy('id','desc')->paginate(1000);
                 return view('pending2',compact('ii'));
            }
            elseif(Auth::User()->type == 'trucking'){
                $cc=trucking::OrderBy('id','desc')->paginate(1000);
                return view('pending3',compact('cc'));
            }else{
                    return redirect('/home');
            }
           }
           public function initial(){
            $ini = model_cs::OrderBy('id','DESC')->paginate(10);
            return view('home',compact('ini'));
           }
           public function seeding(){
                    $rr=model_cs::OrderBy('id','DESC');
                    return $rr;
           }
           public function dash(){
           }
}