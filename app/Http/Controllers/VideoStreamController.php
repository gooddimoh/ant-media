<?php

namespace App\Http\Controllers;

use App\Models\User;
use ApiVideo\Client\Client;
use Illuminate\Http\Request;
use Symfony\Component\HttpClient\Psr18Client;
use ApiVideo\Client\Client as ApiVideoClient;
use ApiVideo\Client\Model\VideoCreationPayload;

class VideoStreamController extends Controller
{
    private $client;
    private $baseuri = 'https://ws.api.video';
    private $apikey = 'K5zDhiFPREf42b2RMOsRUd5H2rIujiPKgHeslupWUeU';

    public function __construct(Client $client, $baseuri, $apikey)
    {
        $this->middleware = ['auth'];
        $this->client = new \ApiVideo\Client\Client($baseuri, $apikey, new \Symfony\Component\HttpClient\Psr18Client());

    }

    public function action_get_video()
    {


    }

    public function action_show_video_stream()
    {
        $name = "name";
        $previue = "previue";

        $user = new User();
        $user->secretkeygenerate();
    }

    public function action_add_video_stream()
    {
        $streamname = "streamname";
        $streamdescription = "streamdescription";

    }

    public function action_show_all_streams()
    {
        print_r("streams");
    }

    public function action_create_videos_tream(Request $request)
    {
        $videoname = $request->json('videoname');

        $videotitle = $request->get('videotitle');
        $request->get('name');
        $request->get('name');


        $this->client->videos()->create((new \ApiVideo\Client\Model\VideoCreationPayload())->setTitle("Maths video"));

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

    public function action_create_live_stream()
    {

        $livestreamname = "livestreamname";

        $playerid = "playerid";

        $this->client->liveStreams()->create((new \ApiVideo\Client\Model\LiveStreamCreationPayload())
            ->setRecord(false) // Whether you are recording or not. True for record, false for not record.
            ->setName($livestreamname) // Add a name for your live stream here.
            ->setPublic(true) // Whether your video can be viewed by everyone, or requires authentication to see it.
            ->setPlayerId("pl4f4ferf5erfr5zed4fsdd")); // The unique identifier for the player.

    }

    public function action_list_of_captions(Request $request)
    {

        $videoId = $request->get('videoId');
        $videoId = 'vi4k0jvEUuaTdRAEjQ4Prklg';

        $captions = $this->client->captions()->list($videoId, array(
            'currentPage' => 2, // Choose the number of search results to return per page. Minimum value: 1)
            'pageSize' => 30 // Results per page. Allowed values 1-100, default is 25.)
        ));

    }

    public function action_create_video_stream2_show()
    {
        if ('create') {
            $video = $this->client->videos()->create((new \ApiVideo\Client\Model\VideoCreationPayload())->setTitle("Maths video"));
        }
    }

    public function action_video_stream_create()
    {
        $this->client->videos()->create((new \ApiVideo\Client\Model\VideoCreationPayload())->setTitle("Maths video2"));

    }

    public function vardumpmodel2()
    {
        $userdto = new \UserDto();
        $user = new User();

        print_r(json_encode($user));

    }
}
