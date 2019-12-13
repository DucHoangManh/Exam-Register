<table>
    <tbody>
        <tr>
            <td colspan="7">THÔNG TIN LỚP HỌC</td>
        </tr>
        <tr>
            <td colspan="4">Tên môn học: {{$class->subject->name}}</td>
            <td colspan="3">Mã lớp: {{$class->code}}</td>
        </tr>
        <tr>
            <td colspan="4">Giảng viên: {{$class->teacher->name}}</td>
            <td colspan="3">Email: {{$class->teacher->email}}</td>
        </tr>
        <tr>
            <td colspan="4">Số tín chỉ: {{$class->subject->credit}}</td>
            <td colspan="3">Sĩ số: {{$class->student->count()}}</td>
        </tr>
    </tbody>
</table>
<table>
    <thead>
        <tr>
            <th>#</th>
            <th>Họ và tên</th>
            <th>MSSV</th>
            <th>Email</th>
            <th>Giới tính</th>
            <th>Ngày sinh</th>
            <th>Chú thích</th>
        </tr>
    </thead>
    <tbody>
        @foreach($class->student as $student)
        <tr>
            <th>{{$loop->index+1}}</th>
            <td>
                {{$student->name}}
            </td>
            <td>
                {{$student->code}}
            </td>
            <td>
                {{$student->user->email}}
            </td>
            <td>
                @if ($student->gender == 0) Nam @else Nữ @endif
            </td>
            <td>
                {{$student->birthday}}
            </td>
            <td>
                @if ($student->is_baned != 0) Cấm thi @endif
            </td>
        </tr>
        @endforeach
    </tbody>
</table>