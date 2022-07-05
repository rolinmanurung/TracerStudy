<table>
    <thead>
    <tr>
        <!-- data alumni -->
        <th>Name</th>
        <th>Email</th>
        <th>Alamat</th>
        <th>No Handphone</th>
        <th>NIM</th>
        <th>Jurusan</th>
        <th>Prodi</th>
        <th>Jenjang</th>
        <th>Tahun Masuk</th>
        <th>Tahun Lulus</th>
        <th>IPK</th>

        <!-- Kueisoner -->
        <th>1</th>
        <th>2</th>
        <th>3</th>
        <th>4</th>
        <th>5</th>
        <th>6</th>
        <th>7</th>
        <th>8</th>
        <th>9</th>
        <th>10</th>
        <th>11</th>
        <th>12</th>
        <th>13</th>
        <th>14</th>
        <th>15</th>






    </tr>
    </thead>
    <tbody>
    @foreach($alumni as $data)
        <tr>
            
            <!-- data alumni -->
            <td>{{ $data->user->name }}</td>
            <td>{{ $data->user->email }}</td>
            <td>{{ $data->alamat }}</td>
            <td>{{ $data->no_handphone }}</td>
            <td>{{ $data->nim }}</td>
            <td>{{ $data->jurusan }}</td>
            <td>{{ $data->prodi }}</td>
            <td>{{ $data->jenjang }}</td>
            <td>{{ $data->tahun_masuk }}</td>
            <td>{{ $data->tahun_lulus }}</td>
            <td>{{ $data->ipk }}</td>

            <!-- Kueisoner -->
            <td>{{ $data->kta->kta1 }}</td>
            <td>{{ $data->kta->kta2}}</td>
            <td>{{ $data->kta->kta3 }}</td>
            <td>{{ $data->kta->kta4 }}</td>
            <td>{{ $data->kta->kta5 }}</td>
            <td>{{ $data->kta->kta6 }}</td>
            <td>{{ $data->kta->kta7 }}</td>
            <td>{{ $data->kta->kta8 }}</td>
            <td>{{ $data->kta->kta9 }}</td>
            <td>{{ $data->kta->kta10 }}</td>
            <td>{{ $data->kta->kta11 }}</td>
            <td>{{ $data->kta->kta12 }}</td>
            <td>{{ $data->kta->kta13 }}</td>
            <td>{{ $data->kta->kta14 }}</td>
            <td>{{ $data->kta->kta15 }}</td>


        </tr>
    @endforeach
    </tbody>
</table>