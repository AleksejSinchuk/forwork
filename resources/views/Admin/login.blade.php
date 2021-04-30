@extends("main")
@section("content")

		<div class="row mt-5">
                <div class="col container">

                    <form method="post"  action={{route("adminlog.store")}} >
                        <input type="text" name="ps" placeholder="password">
                        <button class="btn btn-success" type="submit">Login</button>
                        @csrf
                    </form>
                </div>

            </div>


@endsection