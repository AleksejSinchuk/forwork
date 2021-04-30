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
                <form   action={{route("book.store")}} method="post" >
                    <input type="text" name="name" placeholder="name">
                    <input type="email" name="email" placeholder="email">
                    <input type="text" name="message" placeholder="message">
                    <button class="btn btn-success" type="submit">Add</button>
                    @csrf
                </form>
            </div>

        </div>
@endsection