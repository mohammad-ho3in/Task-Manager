<div class="position-absolute top-0 start-0 p-3" style="z-index: 11">
  <div id="liveToast" class="toast hide" role="alert" aria-live="assertive" aria-atomic="true">
    <div class="toast-header bg-success d-flex justify-content-between">
      <strong class="text-black-50">انجام شد</strong>
      <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
    </div>
    <div class="toast-body">
      {{ session('success') }}
    </div>
  </div>
</div>