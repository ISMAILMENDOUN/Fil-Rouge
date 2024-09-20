<div>

    <h1 class="text-center mt-5 fw-bold text-xl-start m-5 h1">NEW PLAN</h1>
    <form action="" class="npForm" method="GET">
        @csrf
        @method("GET")
        <div class="npDiv col p-5 text-center justify-items-center col-xl-8">
            <div class="d-grid mb-4 "><label for="">PLAN NAME</label>
                <input type="text">
            </div>
            <div class="d-grid mb-4"><label for="">MONTHLY PRICE</label>
                <input type="text">
            </div>
            <div class="d-grid mb-4"><label for="">YEARLY PRICE</label>
                <input type="text">
            </div>
            <div class="d-grid mb-4"><label for="">CARACTERISTIC 1</label>
                <input type="text">
            </div>
            <div class="d-grid mb-4"><label for="">CARACTERISTIC 2</label>
                <input type="text">
            </div>
            <div class="d-grid mb-4"><label for="">CARACTERISTIC 3</label>
                <input type="text">
            </div>
        </div>
    </form>
    <div class="buttons">
        <div class="text-center"><button class="btn-add-caracteristic" onclick="addCaracteristic()"> ADD
                CARACTERISTIC</button></div>
        <div class="text-center"><button class="btn-save" onclick="submitForm()">SAVE</button></div>
        <div class="text-center"><button class="btn-publish" onclick="">PUBLISH</button></div>
    </div>

</div>