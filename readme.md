## Giới thiệu
Trang web cho phép sinh viên tự đăng ký dự thi, chọn ca thi theo những môn đang học. Theo đó, Admin sẽ lập lịch cho các kỳ thi và ca thi trước, sinh viên đã học học phần nào sẽ được quyền đăng ký dự thi học phần đó tại ca thi phù hợp. Mỗi kỳ thi có nhiều ca thi. Mỗi ca thi có nhiều phòng thi. Mỗi phòng thi có số lượng máy tính xác định. Số lượng thí sinh có thể thi cùng ca thi bị giới hạn, không được vượt quá tổng số máy tính của các phòng thi trong ca thi. Khi ca thi đã đủ số lượng thí sinh đăng ký thì các thí sinh khác không thể đăng ký vào ca thi nữa.

Sinh viên đăng nhập vào phần mềm ExamReg mà ở đó đã có thông tin cá nhân sinh viên (do quản trị viên đưa vào CSDL trên cơ sở danh sách lớp học phần được các đơn vị đào tạo gửi) và CHỌN lịch thi của học phần sinh viên cần đăng ký dự thi. Trong lịch thi đó có thông tin điểm thi, các ca thi, các phòng thi của ca thi, số chỗ thi và có chức năng cho sinh viên chọn ca thi họ muốn dự thi. Sau khi sinh viên chọn xong thì lịch thi sinh viên đăng ký được xuất ra ở dạng báo cáo có tên gọi là PHIẾU BÁO DỰ THI và sinh viên download được/in được. Bản in, bản download đều có giá trị là minh chứng cho việc sinh viên đăng ký dự thi thành công. SV sử dụng phiếu báo dự thi này để đi thi.

Hệ thống có 2 vai trò sử dụng: Quản trị viên và sinh viên

## Admin
- Quản trị viên quản lý danh sách môn thi/học phần
- Quản trị viên quản lý danh sách sinh viên, cấp tài khoản cho sinh viên (từ Excel).
- Quản trị viên nhập danh sách sinh viên đã học từng môn thi (đủ điều kiện dự thi) (từ Excel).
- Quản trị viên nhập danh sách sinh viên không đủ điều kiện dự thi (từ Excel).
- Quản trị viên tạo kỳ thi, thêm các ca thi cho kỳ thi, thêm các phòng thi (phòng máy) cho ca thi, lập lịch (ngày thi, giờ bắt đầu, giờ kết thúc) cho các ca thi, xác định môn thi cho từng ca thi.
- Quản trị viên in danh sách thí sinh dự thi theo từng phòng thi của các ca thi.

## Sinh viên
- Sinh viên đăng ký ca thi mà sinh viên đủ điều kiện dự thi và đang còn chỗ trống (chưa đủ số lượng đăng ký theo số máy).
- Sinh viên download/in phiếu báo dự thi sau khi đăng ký thành công.

Database:
![alt text](https://raw.githubusercontent.com/namduong3699/Exam-Register/master/public/db.png)
