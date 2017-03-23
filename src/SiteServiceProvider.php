<<<<<<< OURS
<?php'''

namespace Sites;
//
use Illuminate\Support\ServiceProvider;

use URL, Route;
use Illuminate\Http\Request;


class SiteServiceProvider extends ServiceProvider {

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot(Request $request) {
        /**
         * Publish
         */
         $this->publishes([
            __DIR__.'/config/site_admin.php' => config_path('site_admin.php'),
=======
<?php
/site_admin.php' => config_path('site_admin.php'),
>>>>>>> THEIRS
      
    public function siteViewComposer(Request $request) {

        view()->composer('site::site*', function ($view) {
            global $request;
            $site_id = $request->get('id');
            $is_action = empty($site_id)?'page_add':'page_edit';

            $view->with('sidebar_items', [

                /**
                 * Samples
                 */
                //list
                trans('site::site_admin.page_list') => [
                    'url' => URL::route('admin_site'),
                    "icon" => '<i class="fa fa-users"></i>'
                ],
                //add
                trans('site::site_admin.'.$is_action) => [
                    'url' => URL::route('admin_site.edit'),
                    "icon" => '<i class="fa fa-users"></i>'
                ],
            ]);
            //
        });
    }

}
