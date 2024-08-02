

<!-- Modal for Details -->
<div class="modal fade" style="direction: rtl;padding:10px"id="detailsModal" tabindex="-1" aria-labelledby="detailsModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">

          <button type="button"  class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

          <h5 class="modal-title" id="detailsModalLabel" style="text-align: center">تفاصيل المجموعات</h5>


        </div>
        <div class="modal-body">

                  <div class="container"style="direction: rtl;padding:10px">
                      <table class="table"style="position:center;text-align:center">
                          <thead>
                              <tr>
                                  <th>الاسم</th>
                                  <th>الاسم المعروض</th>
                                  <th>المكان</th>
                                  <th>الطبيب</th>
                                  <th>الدليل</th>

                              </tr>
                          </thead>
                          <tbody>
                              @foreach($campDoctorGuids as $campDoctorGuid)
                              <tr>
                                  <td>{{ $campDoctorGuid->name }}</td>
                                  <td>{{ $campDoctorGuid->display_name }}</td>
                                  <td>{{ $campDoctorGuid->campGround->name }}</td>
                                  <td>{{ $campDoctorGuid->doctor->name }}</td>
                                  <td>{{ $campDoctorGuid->guide->name }}</td>

                              </tr>
                              @endforeach
                          </tbody>
                      </table>
                  </div>



        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">إغلاق</button>
        </div>
      </div>
    </div>
  </div>
