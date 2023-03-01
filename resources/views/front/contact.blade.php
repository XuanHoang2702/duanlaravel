@extends('front.layout.master')

@section('title', 'Contact')
@section('body')
    <div class="container rounded border w-50 mt-5 bg-info ">
        <div class="contact-title text-center mt-5">
            <h1>Contact</h1>
        </div>
        <div class="contact-content ">
            <div class=" mt-4 ">
                <form style="" class="">
                    <div class="form-group">
                        <label class="" for="exampleFormControlInput1">Họ và tên</label>
                        <input type="text" class="form-control" placeholder="name">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Email address</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1"
                            placeholder="name@example.com">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Example textarea</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Description"></textarea>
                    </div>
                    <button class="rounded bg-danger border-0 mt-4 p-2 text-white mb-5" style="width: 100px;">Gửi</button>
                </form>
            </div>

        </div>
    </div>


@endsection
