<div class="table-responsive small">
    <table class="table table-striped table-sm">
      <thead>
        <x-table.tr>
            <th scope="col">Name</th>
            <th scope="col">URL</th>
            <th scope="col">Action</th>
        </x-table.tr>
      </thead>
      <tbody>
        {{$slot}}
      </tbody>
    </table>
  </div>