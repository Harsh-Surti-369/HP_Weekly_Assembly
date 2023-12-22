@extends('layouts.zoneLayout')

@section('title')
    Create Center
@endsection
@section('content')

    <body>
        <div class="container-fluid px-1 py-5 mx-auto">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-8 col-md-9 col-11 text-center">
                    <h3>New Sabha Center</h3>
                    <!-- <p class="blue-text">Just answer a few questions<br> so that we can personalize the right experience for you.</p> -->
                    <div class="card">
                        <h5 class="text-center mb-4">HariPrabodham Assembly Center</h5>
                        <form class="form-card" onsubmit="event.preventDefault()">
                            <div class="row justify-content-between text-start">
                                <div class="col-sm-6 flex-column d-flex">
                                    <label class="form-label px-3">Center Name<span class="text-danger">*</span></label>
                                    <input type="text" id="fname" name="fname" class="form-control"
                                        placeholder="Enter your Center name" onblur="validate(1)">
                                </div>
                                <div class="col-sm-6 flex-column d-flex">
                                    <label class="form-label px-3">Center Area<span class="text-danger">*</span></label>
                                    <input type="text" id="lname" name="lname" class="form-control"
                                        placeholder="Enter your Center Area" onblur="validate(2)">
                                </div>
                            </div>
                            <div class="row justify-content-between text-start">
                                <div class="col-sm-6 flex-column d-flex">
                                    <label class="form-label px-3">Center Leader Name<span
                                            class="text-danger">*</span></label>
                                    <input type="text" id="email" name="email" class="form-control" placeholder=""
                                        onblur="validate(3)">
                                </div>
                                <div class="col-sm-6 flex-column d-flex">
                                    <label class="form-label px-3">Phone number<span class="text-danger">*</span></label>
                                    <input type="text" id="mob" name="mob" class="form-control" placeholder=""
                                        onblur="validate(4)">
                                </div>
                            </div>
                            <div class="row justify-content-between text-start">
                                <div class="col-sm-6 flex-column d-flex">
                                    <label class="form-label px-3">Center Email<span class="text-danger">*</span></label>
                                    <input type="text" id="job" name="job" class="form-control" placeholder=""
                                        onblur="validate(5)">
                                </div>
                            </div>
                            <div class="row justify-content-between text-start">
                                <div class="col-12 flex-column d-flex">
                                    <label class="form-label px-3">Full address<span class="text-danger">*</span></label>
                                    <input type="text" id="ans" name="ans" class="form-control" placeholder=""
                                        onblur="validate(6)">
                                </div>
                            </div>
                            <div class="row justify-content-end">
                                <div class="col-sm-6">
                                    <button type="submit" class="btn btn-primary btn-block">Create center</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>

    </html>
@endsection
