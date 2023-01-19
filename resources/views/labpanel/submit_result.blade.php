@extends('labpanel.labmaster')
@section('content')

<main id="main" class="main">
    <section class="section">
        <div class="row">
            <!-- <div class="col-lg-6"></div> -->
            <!-- <div class="col-lg-6"> -->
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Add Address</h5>

                    <!-- Floating Labels Form -->
                    @if(Session::get('status'))
                    <div class="alert alert-success">
                        {{Session::get('status')}}
                    </div>
                    @endif
                    <form class="row g-3" method="get" action="{{url('/predict_breast_cancer')}}" enctype="multipart/form-data">
                        @csrf


                        <input type="text" name="patient_id" value="{{$patient->id}}" class="form-control" hidden>


                        <div class="col-12">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Patient Name</label>
                                <div class="col-sm-10">
                                    <input type="text" name="name" value="{{$patient->name}}" class="form-control" readonly>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Patient Email</label>
                                <div class="col-sm-10">
                                    <input type="text" name="email" value="{{$patient->email}}" class="form-control" readonly>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Patient Number</label>
                                <div class="col-sm-10">
                                    <input type="number" name="mobile" value="{{$patient->mobile}}" class="form-control" readonly>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Mean Radius</label>
                                <div class="col-sm-10">
                                    <input type="number" step=any name="mean_radius" class="form-control" required>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Mean Texture</label>
                                <div class="col-sm-10">
                                    <input type="number" step=any name="mean_texture" class="form-control" required>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Mean Perimeter</label>
                                <div class="col-sm-10">
                                    <input type="number" step=any name="mean_perimeter" class="form-control" required>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Mean Area</label>
                                <div class="col-sm-10">
                                    <input type="number" step=any name="mean_area" class="form-control" required>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Mean Smoothness</label>
                                <div class="col-sm-10">
                                    <input type="number" step=any name="mean_smoothness" class="form-control" required>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Mean Compactness</label>
                                <div class="col-sm-10">
                                    <input type="number" step=any name="mean_compactness" class="form-control" required>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Mean Concavity</label>
                                <div class="col-sm-10">
                                    <input type="number" step=any name="mean_concavity" class="form-control" required>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Mean Concave Points</label>
                                <div class="col-sm-10">
                                    <input type="number" step=any name="mean_concave_points" class="form-control" required>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Mean Symmetry</label>
                                <div class="col-sm-10">
                                    <input type="number" step=any name="mean_symmetry" class="form-control" required>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Mean Fractal Dimension</label>
                                <div class="col-sm-10">
                                    <input type="number" step=any name="mean_fractal_dimension" class="form-control" required>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Radius Error</label>
                                <div class="col-sm-10">
                                    <input type="number" step=any name="radius_error" class="form-control" required>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Texture Error</label>
                                <div class="col-sm-10">
                                    <input type="number" step=any name="texture_error" class="form-control" required>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Perimeter Error</label>
                                <div class="col-sm-10">
                                    <input type="number" step=any name="perimeter_error" class="form-control" required>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Area Error</label>
                                <div class="col-sm-10">
                                    <input type="number" step=any name="area_error" class="form-control" required>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Smoothness Error</label>
                                <div class="col-sm-10">
                                    <input type="number" step=any name="smoothness_error" class="form-control" required>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Compactness Error</label>
                                <div class="col-sm-10">
                                    <input type="number" step=any name="compactness_error" class="form-control" required>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Concavity Error</label>
                                <div class="col-sm-10">
                                    <input type="number" step=any name="concavity_error" class="form-control" required>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Concave Points Error</label>
                                <div class="col-sm-10">
                                    <input type="number" step=any name="concave_points_error" class="form-control" required>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Symmetry Error</label>
                                <div class="col-sm-10">
                                    <input type="number" step=any name="symmetry_error" class="form-control" required>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Fractal Dimension Error</label>
                                <div class="col-sm-10">
                                    <input type="number" step=any name="fractal_dimension_error" class="form-control" required>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Worst Radius</label>
                                <div class="col-sm-10">
                                    <input type="number" step=any name="worst_radius" class="form-control" required>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Worst Texture</label>
                                <div class="col-sm-10">
                                    <input type="number" step=any name="worst_texture" class="form-control" required>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Worst Perimeter</label>
                                <div class="col-sm-10">
                                    <input type="number" step=any name="worst_perimeter" class="form-control" required>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Worst Area</label>
                                <div class="col-sm-10">
                                    <input type="number" step=any name="worst_area" class="form-control" required>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Worst Smoothness</label>
                                <div class="col-sm-10">
                                    <input type="number" step=any name="worst_smoothness" class="form-control" required>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Worst Compactness</label>
                                <div class="col-sm-10">
                                    <input type="number" step=any name="worst_compactness" class="form-control" required>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Worst Concavity</label>
                                <div class="col-sm-10">
                                    <input type="number" step=any name="worst_concavity" class="form-control" required>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Worst Concave Points</label>
                                <div class="col-sm-10">
                                    <input type="number" step=any name="worst_concave_points" class="form-control" required>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Worst Symmetry</label>
                                <div class="col-sm-10">
                                    <input type="number" step=any name="worst_symmetry" class="form-control" required>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Worst Fractal Dimension</label>
                                <div class="col-sm-10">
                                    <input type="number" step=any name="worst_fractal_dimension" class="form-control" required>
                                </div>
                            </div>
                        </div>


                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <button type="reset" class="btn btn-secondary">Reset</button>
                        </div>


                    </form><!-- End floating Labels Form -->

                </div>
            </div>
        </div>


    </section>
</main>

@endsection