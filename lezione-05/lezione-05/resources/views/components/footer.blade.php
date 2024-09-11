<div class="card text-center">
    <div class="card-header">
      {{$header ?? 'Simple header'}}
    </div>
    <div class="card-body">
      {{$slot}}
    </div>
    <div class="card-footer text-body-secondary">
      {{$time ?? '2 days ago'}}
    </div>
  </div>