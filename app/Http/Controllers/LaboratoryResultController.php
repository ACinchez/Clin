<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Session;

class LaboratoryResultController extends Controller
{
  public function json_get_client_profile_by_id($id){
		// Session::put('client_id', $id);
		// dd($id);
		$param = [ $id ];
		$sp_query = "EXEC pr_ihms_patient_by_id_sel :patient_id;";
		$tx = DB::select($sp_query, $param);

		// dd($tx);
		return view('laboratory-result.clinlab_labtest', array('patient' => $tx));
	}

	public function save_patient_test_results(Request $request){
		// dd($request->input('color'));
		// if(fecalysis_form_id == '2'){

		// }
		$param = [$request->input('fecalysis_form_id'),
							$request->input('patient_id'),
							$request->input('fecalysis_form_enable'),
							$request->input('fec_color'),
							$request->input('fec_consistency'),
							$request->input('fec_occult_blood'),
							$request->input('fec_pus_cells'),
							$request->input('fec_rbc'),
							$request->input('fec_yeast_cells'),
							$request->input('fec_fat_globules'),
							$request->input('fec_ascarais'),
							$request->input('fec_hookworm'),
							$request->input('fec_trichiuris'),
							$request->input('fec_cyst'),
							$request->input('fec_troph'),
							$request->input('fec_cyst_2'),
							$request->input('fec_troph_2'),
							$request->input('fec_others'),
							$request->input('urinalysis_form_id'),
							$request->input('urinalysis_form_enable'),
							$request->input('uri_color'),
							$request->input('uri_clarity'),
							$request->input('uri_ph'),
							$request->input('uri_sp_gr'),
							$request->input('uri_glucose'),
							$request->input('uri_albumin'),
							$request->input('uri_pus'),
							$request->input('uri_rbc'),
							$request->input('uri_renal_cell'),
							$request->input('uri_epithelial'),
							$request->input('uri_mucus_threads'),
							$request->input('uri_bacteria'),
							$request->input('uri_yeast_cells'),
							$request->input('uri_amorphous'),
							$request->input('uri_coarse_granular_cast'),
							$request->input('uri_fine_granular_cast'),
							$request->input('uri_hyaline_cast'),
							$request->input('uri_uric_acid'),
							$request->input('uri_calcium_oxalate'),
							$request->input('uri_triple_phosphate'),
							$request->input('uri_others'),
							$request->input('hematology_form_id'),
							$request->input('hematology_form_enable'),
							$request->input('hem_wbc_count'),
							$request->input('hem_rbc_count'),
							$request->input('hem_hemoglobin'),
							$request->input('hem_hemotocrit'),
							$request->input('hem_mcv'),
							$request->input('hem_mch'),
							$request->input('hem_mchc'),
							$request->input('hem_rdw'),
							$request->input('hem_thrombocyte_count'),
							$request->input('hem_mpv'),
							$request->input('hem_segmenter'),
							$request->input('hem_stab'),
							$request->input('hem_lymphocyte'),
							$request->input('hem_monocyte'),
							$request->input('hem_eosinophil'),
							$request->input('hem_basophil'),
							$request->input('hem_bleeding_time'),
							$request->input('hem_clotting_time'),
							$request->input('hem_esr'),
							$request->input('hem_reticulocyte'),
							$request->input('chemistry_form_id'),
							$request->input('chemistry_form_enable'),
							$request->input('chem_glucose'),
							$request->input('chem_uric_acid'),
							$request->input('chem_creatinine'),
							$request->input('chem_total_cholesterol'),
							$request->input('chem_triglycerides'),
							$request->input('chem_hdl'),
							$request->input('chem_ldl'),
							$request->input('chem_alt_sgpt'),				
							0
					];
		$query = "EXEC pr_ihms_laboratory_result_by_patient_id_ins :fecalysis_form_id, :patient_id, :fecalysis_form_enable, :fec_color, :fec_consistency, :fec_occult_blood, :fec_pus_cells, :fec_rbc, :fec_yeast_cells, :fec_fat_globules, :fec_ascarais, :fec_hookworm, :fec_trichiuris, :fec_cyst, :fec_troph, :fec_cyst_2, :fec_troph_2, :fec_others, :urinalysis_form_id, :urinalysis_form_enable, :uri_color, :uri_clarity, :uri_ph, :uri_sp_gr, :uri_glucose, :uri_albumin, :uri_pus, :uri_rbc, :uri_renal_cell, :uri_epithelial, :uri_mucus_threads, :uri_bacteria, :uri_yeast_cells, :uri_amorphous, :uri_coarse_granular_cast, :uri_fine_granular_cast, :uri_hyaline_cast, :uri_uric_acid, :uri_calcium_oxalate, :uri_triple_phosphate, :uri_others, :hematology_form_id, :hematology_form_enable, :hem_wbc_count, :hem_rbc_count, :hem_hemoglobin, :hem_hemotocrit, :hem_mcv, :hem_mch, :hem_mchc, :hem_rdw, :hem_thrombocyte_count, :hem_mpv, :hem_segmenter, :hem_stab, :hem_lymphocyte, :hem_monocyte, :hem_eosinophil, :hem_basophil, :hem_bleeding_time, :hem_clotting_time, :hem_esr, :hem_reticulocyte, :chemistry_form_id, :chemistry_form_enable, :chem_glucose, :chem_uric_acid, :chem_creatinine, :chem_total_cholesterol, :chem_triglycerides, :chem_hdl, :chem_ldl, :chem_alt_sgpt, :result_id;";
		$tx = DB::select($query, $param);

		return redirect('/clinlab/patient/profile/'. $request->input('patient_id'));
	}

	public function remove_patient_test_by_id($id){
		
		$param = [ $id ];
		$sp_query = "EXEC pr_ihms_patient_by_id_sel :patient_id;";
		$tx = DB::select($sp_query, $param);

		// dd($tx);
		return view('laboratory-result.clinlab_edit', array('patient' => $tx));
	}

	public function destroy($id) {
		$param = [ $id, 0 ];
		$query = "EXEC pr_ihms_patient_test_by_patient_test_id_del :patient_test_id, :result_id;";
		$tx = DB::select($query, $param);

		foreach($tx as $res){
			$patient_id = $res->result_id;
		}
		return redirect('/client_laboratory_history_by_id/'. $patient_id);


	 }


	
} 

