<div class="card">
    <div class="table-responsive">
        <table class="table table-hover table-nowrap"
               id="{{ $id }}">
            <thead class="table-light">
                <tr>
                    @if (isset($heads))
                        {{ $heads }}
                    @endif
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @if (isset($bodys))
                    {{ $bodys }}
                @endif
            </tbody>
        </table>
    </div>
    <div class="card-footer border-0 py-5">
        <span class="text-muted text-sm">Exibindo {{ $total }} de {{ $total }}</span>
    </div>
</div>
