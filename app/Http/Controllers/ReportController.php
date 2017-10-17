<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use JasperPHP\JasperPHP;
class ReportController extends Controller
{
    public function getDatabaseConfig()
    {
        return [
            'driver'   => env('DB_CONNECTION'),
            'host'     => env('DB_HOST'),
            'port'     => env('DB_PORT'),
            'database' => env('DB_DATABASE'),
            'username' => env('DB_USERNAME'),
            'password' => env('DB_PASSWORD'),
            'jdbc_dir' => base_path() . env('JDBC_DIR'),
        ];
    }
    public function index()
    {

        $output = public_path() . '/reports/' . time() . '_professores';
        $report = new JasperPHP;
        $report->process(
            public_path() . '/reports/rel_professores.jrxml',
            $output,
            ['pdf'],
            [],
            $this->getDatabaseConfig()
        )->execute();
        $file = $output . '.pdf';
        $path = $file;


        if (!file_exists($file)) {
            abort(404);
        }
        $file = file_get_contents($file);

        unlink($path);

        return response($file, 200)
            ->header('Content-Type', 'application/pdf')
            ->header('Content-Disposition', 'inline; filename="professor.pdf"');

    }
}