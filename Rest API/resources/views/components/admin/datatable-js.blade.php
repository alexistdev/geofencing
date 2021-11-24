<div>

    <script>
        $(document).ready( function () {
            @if($menu == 'user')
                var tabel = '#tableUser';
            @endif

            $(tabel).DataTable({
                responsive: true,
                columns: [
                    { "width": "5%"},
                    null,
                    null,
                    null,
                    { "width": "15%"},
                ],
            });
        } );
    </script>
</div>
