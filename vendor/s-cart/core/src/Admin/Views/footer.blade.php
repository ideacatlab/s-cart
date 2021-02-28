<footer class="main-footer">
  @if (!sc_config_admin('ADMIN_FOOTER_OFF'))
    <div class="float-right d-none d-sm-inline-block">
      <strong>Env</strong>
      {{ config('app.env') }}
      &nbsp;&nbsp;
      <strong>Version</strong>
      {{ config('s-cart.sub-version') }}
    </div>
    <strong>Copyright &copy; {{ date('Y') }} <a href="https://www.ideacat.ro">IdeaCat</a>.</strong> All rights
    reserved.
  @endif
</footer>
