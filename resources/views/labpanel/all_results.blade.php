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
                    <h5 class="card-title">Results</h5>

                    <!-- Table with stripped rows -->
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Mobile number</th>
                                <th scope="col">Result</th>
                                <th scope="col">Reports</th>
                                <th scope="col">Download Reports</th>
                                <!-- <th scope="col">Time slot</th> -->
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($result as $item)

                            <tr>
                                <th scope="row">{{ $item->id}}</th>
                                <td>{{ $item->name}}</td>
                                <td>{{ $item->email}}</td>
                                <td>{{ $item->mobile}}</td>
                                <td>
                                    @if ($item->outcome==0)

                                    <button class="btn btn-danger btn-sm">Malignant</button>

                                    @elseif($item->outcome==1)
                                    <button class="btn btn-success btn-sm">Banign</button>
                                    @endif
                                </td>
                                <td><a href="{{url('v_pdf/'.$item->id)}}" target="blank" class="btn btn-primary btn-sm">View Report</a>
                                </td>
                                <td><a href="{{url('d_pdf/'.$item->id)}}" class="btn btn-info btn-sm">Download Report</a>
                                </td>

                            </tr>

                            @endforeach

                        </tbody>
                    </table>
                    <!-- End Table with stripped rows -->

                </div>
            </div>
        </div>
    </section>
</main>
@endsection