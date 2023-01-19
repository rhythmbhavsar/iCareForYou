<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <style>
        .page-break {
            page-break-after: always;
        }

        hr {
            height: 2px;
            background-color: #ccc;
            border: none;
        }
    </style>
</head>

<body>

    <div style="height: 94%;">
        <div>
            <div class="float-left">
                <h3>iCareForYou</h3>
                <span>Pvt .LTD</span>
            </div><br>
            <div class="float-right"><span>+91 97266 80249</span><br>
                <span>icareforypu@gmail.com</span>
            </div><br>
        </div><br>
        <hr>

        <!-- <br><br><br> -->
        <center>
            <h1 style="color: red;">Breast Cancer Reports</h1>
        </center><br>

        <li><b>Patient's personal Details</b></li><br>
        <table class="table">
            <tr>
                <td><b>Patient's Name :</b></td>
                <td>{{$ptn->name}}</td>
            </tr>
            <tr>
                <td><b>Patient's Email :</b></td>
                <td>{{$ptn->email}}</td>
            </tr>
            <tr>
                <td><b>Patient's Mobile :</b></td>
                <td>{{$ptn->mobile}}</td>
            </tr>
            <tr>
                <td>
                <td></td>
                </td>
            </tr>
        </table>
        <!-- <br> -->

        <li><b>Predicted Tissues {{$ptn->outcome}}</b></li>

        @if($ptn->outcome==1)
        <p>Predicted Tissues are <b style="color: #0a6613;">Benign</b>. Benign (non-cancerous) breast conditions are very common, and most women have them. In fact, most breast changes are benign. Unlike breast cancers, benign breast conditions are not life-threatening. One common type of benign breast mass is a fibroadenoma, which can develop if breast tissue grows over a milk-producing gland (lobule). Like most breast lumps, fibroadenomas are not serious and will not become cancerous.</p>

        @elseif ($ptn->outcome==0)
        <p>Predicted Tissues are <b style="color: red;">Malignant</b> tumor that grows in or around the breast tissue, mainly in the milk ducts and glands. Malignant term used to describe cancer. Malignant cells grow in an uncontrolled way and can invade nearby tissues and spread to other parts of the body through the blood and lymph system. A tumor usually starts as a lump or calcium deposit that develops as a result of abnormal cell growth. Most breast lumps are benign but some can be premalignant (may become cancer) or malignant.</p>
        @endif



        <img src="assets/img/brest-cancer.jpg" class="img-fluid" alt="Responsive image" style="height: 350px; width: 100%;">


    </div>
    <hr>
    <small>
        <center>© Copyright <b>iCareForYou</b>. All rights Reserved</center>
    </small>

    <div class="page-break"></div>
    <h1>Medical reports</h1>
    <br>

    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Parameter</th>
                <th scope="col">Value</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Mean Radius</td>
                <td>{{$ptn->mean_radius}}</td>
            <tr>

            <tr>
                <th scope="row">2</th>
                <td>Mean Texture</td>
                <td>{{$ptn->mean_texture}}</td>
            <tr>

            <tr>
                <th scope="row">3</th>
                <td>Mean Perimeter</td>
                <td>{{$ptn->mean_perimeter}}</td>
            <tr>

            <tr>
                <th scope="row">4</th>
                <td>Mean Area</td>
                <td>{{$ptn->mean_area}}</td>
            <tr>

            <tr>
                <th scope="row">5</th>
                <td>Mean Smoothness</td>
                <td>{{$ptn->mean_smoothness}}</td>
            <tr>

            <tr>
                <th scope="row">6</th>
                <td>Mean Compactness</td>
                <td>{{$ptn->mean_compactness}}</td>
            <tr>

            <tr>
                <th scope="row">7</th>
                <td>Mean Concavity</td>
                <td>{{$ptn->mean_concavity}}</td>
            <tr>

            <tr>
                <th scope="row">8</th>
                <td>Mean Concave Points</td>
                <td>{{$ptn->mean_concave_points}}</td>
            <tr>

            <tr>
                <th scope="row">9</th>
                <td>Mean Symmetry</td>
                <td>{{$ptn->mean_symmetry}}</td>
            <tr>

            <tr>
                <th scope="row">10</th>
                <td>Mean Fractal Dimension</td>
                <td>{{$ptn->mean_fractal_dimension}}</td>
            <tr>

            <tr>
                <th scope="row">11</th>
                <td>Radius Error</td>
                <td>{{$ptn->radius_error}}</td>
            <tr>

            <tr>
                <th scope="row">12</th>
                <td>Texture Error</td>
                <td>{{$ptn->texture_error}}</td>
            <tr>

            <tr>
                <th scope="row">13</th>
                <td>Perimeter Error</td>
                <td>{{$ptn->perimeter_error}}</td>
            <tr>

            <tr>
                <th scope="row">14</th>
                <td>Area Error</td>
                <td>{{$ptn->area_error}}</td>
            <tr>

            <tr>
                <th scope="row">15</th>
                <td>Smoothness Error</td>
                <td>{{$ptn->smoothness_error}}</td>
            <tr>

            <tr>
                <th scope="row">16</th>
                <td>Compactness Error</td>
                <td>{{$ptn->compactness_error}}</td>
            <tr>

            <tr>
                <th scope="row">17</th>
                <td>Concavity Error</td>
                <td>{{$ptn->concavity_error}}</td>
            <tr>

            <tr>
                <th scope="row">18</th>
                <td>Concave Points Error</td>
                <td>{{$ptn->concave_points_error}}</td>
            <tr>

            <tr>
                <th scope="row">19</th>
                <td>Symmetry Error</td>
                <td>{{$ptn->symmetry_error}}</td>
            <tr>

            <tr>
                <th scope="row">20</th>
                <td>Fractal Dimension Error</td>
                <td>{{$ptn->fractal_dimension_error}}</td>
            <tr>

            <tr>
                <th scope="row">21</th>
                <td>Worst Radius</td>
                <td>{{$ptn->worst_radius}}</td>
            <tr>

            <tr>
                <th scope="row">22</th>
                <td>Worst Texture</td>
                <td>{{$ptn->worst_texture}}</td>
            <tr>

            <tr>
                <th scope="row">23</th>
                <td>Worst Perimeter</td>
                <td>{{$ptn->worst_perimeter}}</td>
            <tr>

            <tr>
                <th scope="row">24</th>
                <td>Worst Area</td>
                <td>{{$ptn->worst_area}}</td>
            <tr>

            <tr>
                <th scope="row">25</th>
                <td>Worst Smoothness</td>
                <td>{{$ptn->worst_smoothness}}</td>
            <tr>

            <tr>
                <th scope="row">26</th>
                <td>Worst Compactness</td>
                <td>{{$ptn->worst_compactness}}</td>
            <tr>

            <tr>
                <th scope="row">27</th>
                <td>Worst Concavity</td>
                <td>{{$ptn->worst_concavity}}</td>
            <tr>

            <tr>
                <th scope="row">28</th>
                <td>Worst Concave Points</td>
                <td>{{$ptn->worst_concave_points}}</td>
            <tr>

            <tr>
                <th scope="row">29</th>
                <td>Worst Symmetry</td>
                <td>{{$ptn->worst_symmetry}}</td>
            <tr>

            <tr>
                <th scope="row">30</th>
                <td>Worst Fractal Dimension</td>
                <td>{{$ptn->worst_fractal_dimension}}</td>
            <tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        </tbody>
    </table><br>
    <span><b>[Note]: </b> This is the machine learning model generated result which have the accuracy of <b style="color: red;">92%</b></span>
    <br><br><br><br><br><br><br><br>
    <hr>
    <small>
        <center>© Copyright <b>iCareForYou</b>. All rights Reserved</center>
    </small>
    <small>
        <center>Made By Rhythm Bhavsar & Hardik Zinzala</center>
    </small>



</body>

</html>