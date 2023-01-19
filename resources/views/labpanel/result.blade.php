@extends('labpanel.labmaster')
@section('content')


<main id="main" class="main">
    <section class="section">


        <div class="row">
            <div class="card"><br>
                <div class="card-body">
                    @if(Session::get('status'))
                    <div class="alert alert-success">
                        {{Session::get('status')}}
                    </div>
                    @endif
                    <h5 class="card-title">Result</h5>

                    <div class="col-12">
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label"><b>Patient Name :</b></label>
                            <div class="col-sm-10">
                                {{$result1->name}}
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-12">
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label"><b> Patient Email :</b></label>
                            <div class="col-sm-10">
                            {{$result1->email}}
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label"> <b> Patient Mobile : </b></label>
                            <div class="col-sm-10">
                            {{$result1->mobile}}
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label"><b>Result :</b></label>
                            <div class="col-sm-10">
                            @if ($result1->outcome==0)
                    
                    <b style="color: red;">Malignant Tissues</b> 
                   
                    @elseif($result1->outcome==1)
                    <b style="color: green;">Banign Tissues</b> 
                    @endif
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="col-12">
                        <div class="form-grooup row">
                        <span class="col-sm-3 col-form-label"><a class="btn btn-primary" href="/all_results">View All results</a></span>
                            <div class="col-sm-9">
                            <a class="btn btn-success" href="{{url('d_pdf/'.$result1->id)}}">Download Report</a>
                            </div>
                        </div>
                    </div>
                    <br>
                    

                </div>
            </div>
        </div>
    </section>
</main>
@endsection