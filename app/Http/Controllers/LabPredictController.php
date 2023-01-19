<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use App\Models\BreastPredictModel;
use App\Models\AppointmentModel;
// use Barryvdh\DomPDF\Facade\Pdf;
use PDF;


class LabPredictController extends Controller
{
    //
    public function predict_breast_cancer(Request $request)
    {

        $response = Http::asForm()->post('https://breast-cancer-predictor-rhythm.herokuapp.com/predict', [

            'mean_radius' => $request->input('mean_radius'),
            'mean_texture' => $request->input('mean_texture'),
            'mean_perimeter' => $request->input('mean_perimeter'),
            'mean_area' => $request->input('mean_area'),
            'mean_smoothness' => $request->input('mean_smoothness'),
            'mean_compactness' => $request->input('mean_compactness'),
            'mean_concavity' => $request->input('mean_concavity'),
            'mean_concave_points' => $request->input('mean_concave_points'),
            'mean_symmetry' => $request->input('mean_symmetry'),
            'mean_fractal_dimension' => $request->input('mean_fractal_dimension'),
            'radius_error' => $request->input('radius_error'),
            'texture_error' => $request->input('texture_error'),
            'perimeter_error' => $request->input('perimeter_error'),
            'area_error' => $request->input('area_error'),
            'smoothness_error' => $request->input('smoothness_error'),
            'compactness_error' => $request->input('compactness_error'),
            'concavity_error' => $request->input('concavity_error'),
            'concave_points_error' => $request->input('concave_points_error'),
            'symmetry_error' => $request->input('symmetry_error'),
            'fractal_dimension_error' => $request->input('fractal_dimension_error'),
            'worst_radius' => $request->input('worst_radius'),
            'worst_texture' => $request->input('worst_texture'),
            'worst_perimeter' => $request->input('worst_perimeter'),
            'worst_area' => $request->input('worst_area'),
            'worst_smoothness' => $request->input('worst_smoothness'),
            'worst_compactness' => $request->input('worst_compactness'),
            'worst_concavity' => $request->input('worst_concavity'),
            'worst_concave_points' => $request->input('worst_concave_points'),
            'worst_symmetry' => $request->input('worst_symmetry'),
            'worst_fractal_dimension' => $request->input('worst_fractal_dimension'),
        ]);

        // $response = Http::get('https://breast-cancer-predictor-rhythm.herokuapp.com');

        $result = $response['Outcome'];
        print_r($result);



        $s = new BreastPredictModel;
        $s->patient_id = $request->input('patient_id');
        $s->name = $request->input('name');
        $s->email = $request->input('email');
        $s->mobile = $request->input('mobile');
        $s->mean_radius = $request->input('mean_radius');
        $s->mean_texture = $request->input('mean_texture');
        $s->mean_perimeter = $request->input('mean_perimeter');
        $s->mean_area = $request->input('mean_area');
        $s->mean_smoothness = $request->input('mean_smoothness');
        $s->mean_compactness = $request->input('mean_compactness');
        $s->mean_concavity = $request->input('mean_concavity');
        $s->mean_concave_points = $request->input('mean_concave_points');
        $s->mean_symmetry = $request->input('mean_symmetry');
        $s->mean_fractal_dimension = $request->input('mean_fractal_dimension');
        $s->radius_error = $request->input('radius_error');
        $s->texture_error = $request->input('texture_error');
        $s->perimeter_error = $request->input('perimeter_error');
        $s->area_error = $request->input('area_error');
        $s->smoothness_error = $request->input('smoothness_error');
        $s->compactness_error = $request->input('compactness_error');
        $s->concavity_error = $request->input('concavity_error');
        $s->concave_points_error = $request->input('concave_points_error');
        $s->symmetry_error = $request->input('symmetry_error');
        $s->fractal_dimension_error = $request->input('fractal_dimension_error');
        $s->worst_radius = $request->input('worst_radius');
        $s->worst_texture = $request->input('worst_texture');
        $s->worst_perimeter = $request->input('worst_perimeter');
        $s->worst_area = $request->input('worst_area');
        $s->worst_smoothness = $request->input('worst_smoothness');
        $s->worst_compactness = $request->input('worst_compactness');
        $s->worst_concavity = $request->input('worst_concavity');
        $s->worst_concave_points = $request->input('worst_concave_points');
        $s->worst_symmetry = $request->input('worst_symmetry');
        $s->worst_fractal_dimension = $request->input('worst_fractal_dimension');
        $s->outcome = $result;
        $s->save();


        $up_status = AppointmentModel::find($request->input('patient_id'));
        $up_status->result_status = 1;
        $up_status->update();


        $result1 = BreastPredictModel::find($s->id);
        return view('labpanel.result', compact('result1'));
    }

    public function all_results()
    {
        $result = BreastPredictModel::all();
        return view('labpanel.all_results', compact('result'));
    }

    public function v_pdf($id)
    {
        // $pdf = Pdf::loadView('pdf.invoice');
        // return $pdf->download('invoice.pdf');

        $ptn = BreastPredictModel::find($id);
        $pdf = PDF::loadView('pdf.report', array('ptn' => $ptn));
        return $pdf->stream();

    }
    
    public function d_pdf($id)
    {
        // $pdf = Pdf::loadView('pdf.invoice');
        // return $pdf->download('invoice.pdf');

        $ptn = BreastPredictModel::find($id);
        $pdf = PDF::loadView('pdf.report', array('ptn' => $ptn));
        return $pdf->download('report.pdf');

    }
}
