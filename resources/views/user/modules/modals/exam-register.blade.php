<div class="modal fade" id="kt_modal_6" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <form id="register-modal" action="{{route('user.register')}}" method="post">
                {{ csrf_field() }}
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Đăng ký ca thi</h5>
                </div>
                <div class="modal-body">
                    <div class="kt-portlet__body">
                        <!--begin::Section-->
                        <div class="kt-section">
                            <div class="kt-section__content">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Thứ</th>
                                            <th>Ngày thi</th>
                                            <th>Giờ thi</th>
                                            <th>Ca thi</th>
                                            <th>Phòng thi</th>
                                            <th>Địa điểm</th>
                                            <th>Trạng thái</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody class="test-table">
                                        <tr class="test-row" style="display:none">
                                            <th scope="row" class="test-index"></th>
                                            <td class="test-thu"></td>
                                            <td class="test-date"></td>
                                            <td class="test-time"></td>
                                            <td class="test-shift"></td>
                                            <td class="test-room"></td>
                                            <td class="test-location"></td>
                                            <td class="test-status"></td>
                                            <td>
                                                <label class="kt-radio kt-radio--bold kt-radio--brand">
                                                    <input type="radio" name="test_id" value="">
                                                    <span></span>
                                                </label>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!--end::Section-->
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="hidden" name="register_id" value="">
                    <button type="submit" class="btn btn-primary">Save changes</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>

