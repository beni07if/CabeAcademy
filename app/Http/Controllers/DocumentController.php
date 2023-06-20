<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

use GuzzleHttp\Psr7\Uri;
use GuzzleHttp\Psr7\UriResolver;
use Symfony\Component\DomCrawler\Crawler;

use Nesk\Rialto\Data\JsFunction;
use Nesk\Rialto\Facades\Rialto;

// use Goutte\Client;
use Goutte\Client as GoutteClient;

class DocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function scrapeBlazorWebsite()
    {
        $scriptPath = base_path('app/scripts/scrape.js');
        $output = shell_exec("node {$scriptPath}");

        return response($output);
    }

    public function scrape()
    {
        $client = new Client();
        $response = $client->request('GET', 'http://www.beritanegara.co.id');

        $html = (string)$response->getBody();
        $crawler = new Crawler($html);

        // Ambil data dari tabel
        $data = [];
        $crawler->filter('table tr')->each(function ($row) use (&$data) {
            $rowData = [];
            $row->filter('td')->each(function ($cell) use (&$rowData) {
                $rowData[] = $cell->text();
            });
            $data[] = $rowData;
        });

        // Lakukan sesuatu dengan data yang diperoleh
        // ...

        return response()->json($data);
    }

    public function cominfoPtk()
    {
        $client = new Client();
        $response = $client->request('GET', 'https://webgisbangunan.binamargapontianak.com/data-bangunan-gedung');

        $html = (string)$response->getBody();
        $crawler = new Crawler($html);

        // Ambil data dari tabel
        $data = [];
        $crawler->filter('table tr')->each(function ($row) use (&$data) {
            $rowData = [];
            $row->filter('td')->each(function ($cell) use (&$rowData) {
                $rowData[] = $cell->text();
            });
            $data[] = $rowData;
        });

        // Lakukan sesuatu dengan data yang diperoleh
        // ...

        return response()->json($data);
    }

    public function usdaOrganic()
    {
        $client = new Client();
        $response = $client->request('GET', 'https://organic.ams.usda.gov/integrity/Search');

        $html = (string)$response->getBody();
        $crawler = new Crawler($html);

        // Ambil data dari tabel
        $data = [];
        $crawler->filter('table tr')->each(function ($row) use (&$data) {
            $rowData = [];
            $row->filter('td')->each(function ($cell) use (&$rowData) {
                $rowData[] = $cell->text();
            });
            $data[] = $rowData;
        });

        // Lakukan sesuatu dengan data yang diperoleh
        // ...

        return response()->json($data);
    }

    public function scrapeBeritaNegara()
    {
        $client = new Client();
        $baseUrl = 'http://www.beritanegara.co.id/';
        $currentPage = 1;
        $perPage = 5;

        ini_set('max_execution_time', 120); // Set to desired time limit in seconds
        $data = [];

        do {
            $url = $baseUrl . "?page={$currentPage}&per-page={$perPage}";

            $response = $client->request('GET', $url);
            $html = (string)$response->getBody();
            $crawler = new Crawler(null, $baseUrl); // Pass the base URI here

            // Load the HTML content
            $crawler->addHtmlContent($html);

            // Ambil data dari tabel
            $crawler->filter('table tr')->each(function ($row) use (&$data) {
                $rowData = [];
                $row->filter('td')->each(function ($cell) use (&$rowData) {
                    $rowData[] = $cell->text();
                });
                $data[] = $rowData;
            });

            // Cek apakah ada halaman selanjutnya
            $pagination = $crawler->filter('.pagination');
            $nextPageLink = $pagination->filter('.next > a')->link();
            $currentPage++;
        } while ($nextPageLink);

        // Lakukan sesuatu dengan data yang diperoleh
        // ...

        return response()->json($data);
    }

    public function scrapeCoffeeData()
    {
        $url = 'https://www.flocert.net/about-flocert/customer-search/';

        // $client = new Client();
        // $client = new \Goutte\Client();
        $client = new GoutteClient();
        $crawler = $client->request('GET', $url);

        // Menemukan elemen tabel yang berisi data kopi
        $table = $crawler->filter('table')->first();

        // Mendapatkan header kolom
        $header = $table->filter('th')->each(function ($th) {
            return $th->text();
        });

        // Mendapatkan data baris
        $rows = $table->filter('tr')->slice(1)->each(function ($row) {
            return $row->filter('td')->each(function ($td) {
                return $td->text();
            });
        });

        // Menyimpan data dalam file CSV
        $filename = 'coffee_data.csv';
        $file = fopen($filename, 'w');
        fputcsv($file, $header);
        foreach ($rows as $row) {
            fputcsv($file, $row);
        }
        fclose($file);

        return response("Data coffee berhasil diunduh dan disimpan dalam file {$filename}.");
    }

    public function scrapeCoffeeData2()
    {
        $url = 'https://www.flocert.net/about-flocert/customer-search/';

        $client = new GoutteClient();
        $crawler = $client->request('GET', $url);

        // Mendapatkan data kopi dari tabel
        $coffeeData = [];
        $crawler->filter('.customers-list > li')->each(function ($node) use (&$coffeeData) {
            $name = $node->filter('.name')->text();
            $country = $node->filter('.country')->text();
            $certification = $node->filter('.certification')->text();

            $coffeeData[] = [
                'name' => $name,
                'country' => $country,
                'certification' => $certification,
            ];
        });

        // Menyimpan data dalam file JSON
        $filename = 'coffee_data.json';
        file_put_contents($filename, json_encode($coffeeData, JSON_PRETTY_PRINT));

        return response("Data coffee berhasil diunduh dan disimpan dalam file {$filename}.");
    }


    public function index()
    {
        return view('admin.content.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.content.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return view('admin.content.store');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('admin.content.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('admin.content.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return view('admin.content.update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
