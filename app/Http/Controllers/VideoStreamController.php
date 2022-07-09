<?php

namespace App\Http\Controllers;

use App\Models\User;
use http\Client;
use Illuminate\Http\Request;
use Symfony\Component\HttpClient\Psr18Client;
use ApiVideo\Client\Client as ApiVideoClient;
use ApiVideo\Client\Model\VideoCreationPayload;

class VideoStreamController extends Controller
{

    public function __construct()
    {
        $this->middleware = ['auth'];
    }

    public function getvideo()
    {

        $http = 'https://sandbox.api.video';
        $secretkey = 'K5zDhiFPREf42b2RMOsRUd5H2rIujiPKgHeslupWUeU';
        $video = "video";

    }

    public function showvideostream()
    {
        $name = "name";
        $previue = "previue";

        $user = new User();
        $user->secretkeygenerate();
    }

    public function addvideostream()
    {
        $streamname = "streamname";
        $streamdescription = "streamdescription";

    }

    public function showallstreams()
    {
        print_r("streams");
    }

    public function createvideostream(Request $request)
    {
        $videoname = $request->json('videoname');
        $request->get('name');
        $request->get('name');
        $request->get('name');


        $client = new \ApiVideo\Client\Client(
            'https://ws.api.video',
            'YOUR_API_KEY',
            new \Symfony\Component\HttpClient\Psr18Client()
        );

        $video = $client->videos()->create((new \ApiVideo\Client\Model\VideoCreationPayload())->setTitle("Maths video"));

        $existingSourceVideo = $client->videos()->create((new \ApiVideo\Client\Model\VideoCreationPayload())
            ->setTitle("Maths video")
            ->setSource("https://www.myvideo.url.com/video.mp4"));

        $privateVideo = $client->videos()->create((new \ApiVideo\Client\Model\VideoCreationPayload())
            ->setTitle("Maths video")
            ->setPublic(false));

        $anotherVideo = $client->videos()->create((new \ApiVideo\Client\Model\VideoCreationPayload())
            ->setTitle("Maths video") // The title of your new video.
            ->setDescription("A video about string theory.") // A brief description of your video.
            ->setSource("https://www.myvideo.url.com/video.mp4") // If you add a video already on the web, this is where you enter the url for the video.
            ->setPublic(true) // Whether your video can be viewed by everyone, or requires authentication to see it. A setting of false will require a unique token for each view.
            ->setPanoramic(false) // Indicates if your video is a 360/immersive video.
            ->setMp4Support(true) // Enables mp4 version in addition to streamed version.
            ->setPlayerId("pl45KFKdlddgk654dspkze") // The unique identification number for your video player.
            ->setTags(array("TAG1", "TAG2")) // A list of tags you want to use to describe your video.
            ->setMetadata(array( // A list of key value pairs that you use to provide metadata for your video. These pairs can be made dynamic, allowing you to segment your audience. You can also just use the pairs as another way to tag and categorize your videos.
                new \ApiVideo\Client\Model\Metadata(['key' => 'key1', 'value' => 'key1value1']),
                new \ApiVideo\Client\Model\Metadata(['key' => 'key2', 'value' => 'key2value1']))));

    }

    public function createlivestream()
    {

        $livestreamname = "livestreamname";

        $playerid = "playerid";

        $liveStream = $client->liveStreams()->create((new \ApiVideo\Client\Model\LiveStreamCreationPayload())
            ->setRecord(false) // Whether you are recording or not. True for record, false for not record.
            ->setName($livestreamname) // Add a name for your live stream here.
            ->setPublic(true) // Whether your video can be viewed by everyone, or requires authentication to see it.
            ->setPlayerId("pl4f4ferf5erfr5zed4fsdd")); // The unique identifier for the player.

        var_dump($liveStream);
    }

    public function listofcaptions()
    {

        $apiKey = 'your API key here';
        $apiVideoEndpoint = 'https://ws.api.video';

        $httpClient = new \Symfony\Component\HttpClient\Psr18Client();
        $client = new ApiVideo\Client\Client(
            $apiVideoEndpoint,
            $apiKey,
            $httpClient
        );

        ApiVideoClient::class;

        $client = new \ApiVideo\Client\Client(
            'https://ws.api.video',
            $this->apikey,
            new \Symfony\Component\HttpClient\Psr18Client()
        );

        $videoId = 'vi4k0jvEUuaTdRAEjQ4Prklg'; // The unique identifier for the video you want to retrieve a list of captions for.
        $captions = $client->captions()->list($videoId, array(
            'currentPage' => 2, // Choose the number of search results to return per page. Minimum value: 1)
            'pageSize' => 30 // Results per page. Allowed values 1-100, default is 25.)
        ));

        var_dump($captions);
    }

    public function createvideostream2()
    {
        $client = new \ApiVideo\Client\Client(
            'https://ws.api.video',
            'K5zDhiFPREf42b2RMOsRUd5H2rIujiPKgHeslupWUeU',
            new \Symfony\Component\HttpClient\Psr18Client()
        );

//        $client->videos()->get()
        $video = $client->videos()->create((new \ApiVideo\Client\Model\VideoCreationPayload())->setTitle("Maths video"));

//        $existingSourceVideo = $client->videos()->create((new \ApiVideo\Client\Model\VideoCreationPayload())
//            ->setTitle("Maths video")
//            ->setSource("https://www.myvideo.url.com/video.mp4"));
//
//        $privateVideo = $client->videos()->create((new \ApiVideo\Client\Model\VideoCreationPayload())
//            ->setTitle("Maths video")
//            ->setPublic(false));
//
//        $anotherVideo = $client->videos()->create((new \ApiVideo\Client\Model\VideoCreationPayload())
//            ->setTitle("Maths video")
//            ->setDescription("A video about string theory.")
//            ->setSource("https://www.myvideo.url.com/video.mp4")
//            ->setPublic(true)
//            ->setPanoramic(false)
//            ->setMp4Support(true)
//            ->setPlayerId("pl45KFKdlddgk654dspkze")
//            ->setTags(array("TAG1", "TAG2"))
//            ->setMetadata(array(
//                new \ApiVideo\Client\Model\Metadata(['key' => 'key1', 'value' => 'key1value1']),
//                new \ApiVideo\Client\Model\Metadata(['key' => 'key2', 'value' => 'key2value1']))));
    }
}
