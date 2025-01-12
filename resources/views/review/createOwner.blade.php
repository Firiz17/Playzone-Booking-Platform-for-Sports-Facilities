<!DOCTYPE html>
<html>
<head>
    <title>Comments Section</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">

    <h2>Leave a Comment</h2>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error  }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form action="{{ route('review.store') }}" method="POST">
        @csrf
        @isset($comment)
        <input type="hidden" name="parent_id" value="{{ $comment->id }}">
        @endisset
        <div class="form-group">
            <label for="comment">Comment</label>
            <textarea class="form-control" id="comment" name="comments" rows="4" required>
                @isset($username)
                    {{ '@' . $username }}
                @endisset
            </textarea>
        </div>
        <div class="form-group">
            <label for="rating">Rating (1-5)</label>
            <select class="form-control" id="reviews" name="reviews" required>
                <option value="" disabled selected>-- Select a Rating --</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
