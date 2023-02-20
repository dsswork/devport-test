<div class="modal fade" id="history" style="display: none;" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">History</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body">
                <table class="table table-hover">
                    <thead>
                    <tr class="table-dark">
                        <th scope="col">Points</th>
                        <th scope="col">Status</th>
                        <th scope="col">Result</th>
                        <th scope="col">Date/Time</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($history as $result)
                        <tr class="@if($result->points%2==0) table-success @else table-danger @endif">
                            <td>{{ $result->points }}</td>
                            <td>{{ $result->points%2==0 ? 'Win' : 'Lose' }}</td>
                            <td>{{ $result->value }}</td>
                            <td>{{ $result->created_at->toDateTimeString() }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
