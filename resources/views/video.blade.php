<div class="panel panel-primary">
    <div class="panel-heading">
      <h3 class="panel-title pull-left">Title: {{ $video->title }}</h3>
      <a href="{{ route('home') }}" class="btn btn-default pull-right">
        Back
      </a>
      <div class="clearfix"></div>
    </div>
    <div class="panel-body">
      <div class="table-responsive">
        <table class="table table-striped">
          <tr>
            <th>Description</th>
              <td>{{ $video->description }}</td>
          </tr>
          <tr>
            <th>Url</th>
              <td>{{ $video->url }}</td>
          </tr>
          <tr>
            <th>Status</th>
              <td>{{ $video->status }}</td>
          </tr>
        </table>
      </div>
    </div>
  <div class="panel-footer">Copyright &copy; Erick Boniventure</div>
</div>
