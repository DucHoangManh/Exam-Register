<div class="modal fade" id="kt_modal_6" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                </button>
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
                                        <th>Giờ thi</th>
                                        <th>Giảng đường</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @for ($i=0; $i<5; $i++)
                                    <tr>
                                        <th scope="row">{{$i+1}}</th>
                                        <td>6</td>
                                        <td>14:00 - 16:00</td>
                                        <td>107 - G2</td>
                                        <td>
                                            <label class="kt-radio kt-radio--bold kt-radio--brand">
                                                <input type="radio" name="radio6">
                                                <span></span>
                                            </label>
                                        </td>
                                    </tr>
                                    @endfor
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!--end::Section-->
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>

