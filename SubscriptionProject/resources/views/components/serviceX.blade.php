
<div class="card col-12  my-5  mx-xs-5 d-block d-sm-none navColor" style="width: 18rem;">
    <div class="card-body d-grid gap-2">
        <h2 class="card-title fw-bold text-center">BASIC</h2>
        <p class="card-text">Plan id: <span> 144</span></p>
        <p class="card-text">Creation Date: <span>01/01/2024</span></p>
        <p class="card-text  d-flex justify-content-center gap-4 h3"><a href=""><i class="bi bi-gear"></i></a><a href=""><i class="bi bi-trash text-danger"></i></a></p>
    </div>
</div>
<div class="card col-12  my-5  mx-xs-5 d-block d-sm-none navColor" style="width: 18rem;">
    <div class="card-body d-grid gap-2">
        <h2 class="card-title fw-bold text-center">STANDARD</h2>
        <p class="card-text">Plan id: <span> 144</span></p>
        <p class="card-text">Creation Date: <span>01/01/2024</span></p>
        <p class="card-text  d-flex justify-content-center gap-4 h3"><a href=""><i class="bi bi-gear"></i></a><a href=""><i class="bi bi-trash text-danger"></i></a></p>
    </div>
</div>
<div class="card col-12  my-5  mx-xs-5 d-block d-sm-none navColor" style="width: 18rem;">
    <div class="card-body d-grid gap-2">
        <h2 class="card-title fw-bold text-center">PREMIUM</h2>
        <p class="card-text">Plan id: <span> 144</span></p>
        <p class="card-text">Creation Date: <span>01/01/2024</span></p>
        <p class="card-text  d-flex justify-content-center gap-4 h3"><a href=""><i class="bi bi-gear"></i></a><a href=""><i class="bi bi-trash text-danger"></i></a></p>
    </div>
</div>
<div class="card col-12  my-5  mx-xs-5 d-block d-sm-none navColor" style="width: 18rem;">
    <div class="card-body d-grid gap-2">
        <h2 class="card-title fw-bold text-center">DIAMOND</h2>
        <p class="card-text">Plan id: <span> 144</span></p>
        <p class="card-text">Creation Date: <span>01/01/2024</span></p>
        <p class="card-text  d-flex justify-content-center gap-4 h3"><a href=""><i class="bi bi-gear"></i></a><a href=""><i class="bi bi-trash text-danger"></i></a></p>
    </div>
</div>
<div class="col-12 text-center d-grid w-75 mb-5 d-block d-sm-none">
    <button class="btn btn-success fw-bold btn-lg" onclick="window.location='{{route('plans.plan')}}'">Create New Plan</button>
</div>

<div class="d-none d-sm-block d-flex mt-5 w-75">
<div class="text-end mb-5">
    <button class="btn btn-success fw-bold btn-lg" onclick="window.location='{{route('plans.plan')}}'">Create New Plan</button>
</div>
    <table class="table text-center table-bordered h5 align-middle">
        <thead class="h5">
            <tr>
                <th scope="col">Plan Id</th>
                <th scope="col">Plan Name</th>
                <th scope="col">Creation Date</th>
                <th scope="col">Edit Plan</th>
                <th scope="col">Delete Plan</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Basic</td>
                <td>01/01/2024</td>
                <td><button class="btn w-75 btn-purple">EDIT</button></td>
                <td> <button class="btn btn-red w-75" onclick="window.location='{{route('services.service')}}'">DELETE</button></td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Standard</td>
                <td>07/01/2024</td>
                <td><button class="btn w-75 btn-purple ">EDIT</button></td>
                <td> <button class="btn btn-red w-75"  onclick="window.location='{{route('services.service')}}'">DELETE</button></td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>Premium</td>
                <td>09/10/2024</td>
                <td><button class="btn btn-purple w-75">EDIT</button></td>
                <td> <button class="btn btn-red w-75"  onclick="window.location='{{route('services.service')}}'">DELETE</button></td>
            </tr>
        </tbody>
    </table>
</div>