@extends('front.master')

@section('content')
<div class="row">
    <div class="col-12">

        <table class="table table-striped table-bordered table-responsive-lg">
        <thead class="thead-light">
        </thead>
        <tbody>
            <tr>
            <td class="post-col d-lg-flex justify-content-lg-between">
                <div><span class="font-weight-bold">Post subject:</span> Forum post title with a complex and long question.</div>
                <div><span class="font-weight-bold">Posted:</span> 03 Apr 2017, 13:46</div>
            </td>
            </tr>
            <tr>
            <td>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla feugiat auctor enim eu blandit. Aliquam consequat tortor sit amet velit consectetur, eu sollicitudin orci posuere. Integer at varius massa, at aliquam velit. Suspendisse eu pellentesque libero, vel suscipit felis. Sed non eros non purus sollicitudin ullamcorper sit amet ut dolor. Curabitur ac nisi nunc. Suspendisse porta ac eros vitae dapibus. Donec a metus a purus rutrum rutrum ac ac ipsum. Ut vulputate facilisis nisi, in imperdiet dolor suscipit eget. Suspendisse ultricies mauris quis ex pellentesque ultricies. Duis a purus nec risus condimentum pellentesque at at enim.<p/>
                <p>In aliquet lorem eget eleifend faucibus. Praesent pellentesque vel arcu ut egestas. Mauris mauris risus, scelerisque quis consectetur suscipit, sollicitudin vitae tortor. Proin eget commodo libero, sit amet tempus lorem. Sed bibendum eros arcu, ac semper lorem porta a. Curabitur accumsan risus aliquam, mattis leo eu, fringilla nibh. Aenean luctus condimentum purus in fringilla. Vivamus a diam dolor. Fusce iaculis scelerisque urna, nec ultrices urna.</p>
            </td>
            </tr>
        </tbody>
        </table>

        <hr>





        <hr>

        <form class="mb-3">
            <div class="form-group">
            <label for="comment">Reply to this post:</label>
            <div class="form-group mr-2 mb-3 mb-md-2">
              <input type="email" class="form-control" placeholder="Your Email" id="email" required>
            </div>
            <div class="form-group mr-2">
              <input type="password" class="form-control" id="password" placeholder="Your Password" required>
            </div>
            <textarea class="form-control" id="comment" rows="3" placeholder="Write your comment here." required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="reset" class="btn btn-danger">Reset</button>
        </form>
    </div>
</div>

@endsection