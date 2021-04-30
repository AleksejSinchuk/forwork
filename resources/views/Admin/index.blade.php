@extends("main")
@section("content")




   <table class="table table-dark">
        <thead>
        <tr>

            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Message</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($books as $book)
            <tr>
                <td>{{$book->name}}</td>
                <td>{{$book->email}}</td>
                <td>{{$book->message}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>





            <div class="row mt-5">
                <div class="col container">

                    <form method="post"  action={{route("admin.destroy",1)}} >
                        <input type="text" name="id" placeholder="id">
                        <button class="btn btn-success" type="submit">Delete</button>
                        @method("DELETE")
                        @csrf
                    </form>
                </div>

            </div>




            <div class="row mt-5">
                <div class="col container">
                    <form method="post" action={{route("admin.update",2)}}>
                        <input type="number" name="id" placeholder="id ">
                        <input type="text" name="name" placeholder="name">
                        <input type="text" name="email" placeholder="email">
                        <input type="text" name="message" placeholder="message">
                        <button class="btn btn-success" type="submit">update</button>
                        @method("PUT")
                        @csrf
                    </form>
                </div>

            </div>
        </div>


@endsection
