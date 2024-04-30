<table border="1">
    <tr>
        <th>ID</th>
        <th>Nom</th>
        <th>Data de inici</th>
        <th>Data final</th>
        <th>Num places</th>
        <th>Ciutat</th>
        <th>Editar</th>
        <th>Eliminar</th>
    </tr>
    @foreach ($casals as $casal)
        <tr>
            <td>{{$casal->id}}</td>
            <td>{{$casal->nom}}</td>
            <td>{{$casal->data_inici}}</td>
            <td>{{$casal->data_final}}</td>
            <td>{{$casal->n_places}}</td>
            <td>{{$casal->ciutat_id}}</td>
            <td><a href="{{route('edit.casal', ['casal_id' => $casal->id])}}">Editar</a></td>
            <td><a href="{{route('destroy.casal', ['casal_id' => $casal->id])}}">Eliminar</a></td>
        </tr>
    @endforeach
</table>