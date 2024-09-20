@for($i = 0; $i <= 10; $i++)
<div class="card col-12  my-5  mx-xs-5 d-block d-sm-none navColor" style="width: 18rem;">
    <div class="card-body">
        <h2 class="card-title fw-bold text-center">Service X</h2>
        <p class="card-text">Service id: <span> 144</span></p>
        <p class="card-text">Creation Date: <span>01/01/2024</span></p>
        <p class="card-text">H.S.P*: <span>Yes</span></p>
        <div class="text-center"><a href="{{route('services.service')}}" class="btn btn-success center">ADD PLAN</a></div>
    </div>
</div>
@endfor
<div class="d-none d-sm-block d-flex mt-5 w-50">
    <table class="table text-center table-bordered">
        <thead class="h5">
            <tr>
                <th scope="col">Service Id</th>
                <th scope="col">Service Name</th>
                <th scope="col">Creation Date</th>
                <th scope="col">H.S.P*</th>
                <th scope="col">Add Subscription Plan</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Service 1</td>
                <td>01/01/2024</td>
                <td>Yes</td>
                <td> <button class="btn btn-success w-75" onclick="window.location='{{route('services.service')}}'">ADD</button></td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Service 2</td>
                <td>07/01/2024</td>
                <td>Yes</td>
                <td> <button class="btn btn-success w-75"  onclick="window.location='{{route('services.service')}}'">ADD</button></td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>Service 3</td>
                <td>09/10/2024</td>
                <td>Yes</td>
                <td> <button class="btn btn-success w-75"  onclick="window.location='{{route('services.service')}}'">ADD</button></td>
            </tr>
        </tbody>
    </table>
</div>