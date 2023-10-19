<?php

namespace App\Http\Controllers;

use App\Managers\RoleManager;
use App\Managers\UserManager;
use App\Managers\ArtistManager;
use App\Managers\BeatmakerManager;
use App\Managers\AlbumManager;
use App\Managers\PackManager;
use App\Managers\ProdManager;
use App\Managers\TrackManager;
use App\Managers\PlaylistManager;
use App\Managers\PlaylistTrackManager;
use App\Models\Album;
use App\Models\Artist;
use App\Models\Beatmaker;
use App\Models\Pack;
use App\Models\Playlist;
use App\Models\PlaylistTrack;
use App\Models\Prod;
use App\Models\Role;
use App\Models\Track;
use App\Models\User;
use Illuminate\Support\Facades\Schema;
use App\Providers\RouteServiceProvider;

class ImportController extends Controller
{

    public function __construct(
        protected RoleManager $roleManager,
        protected UserManager $userManager,
        protected ArtistManager $artistManager,
        protected BeatmakerManager $beatmakerManager,
        protected AlbumManager $albumManager,
        protected PackManager $packManager,
        protected ProdManager $prodManager,
        protected TrackManager $trackManager,
        protected PlaylistManager $playlistManager,
        protected PlaylistTrackManager $playlistTrackManager
        ) {}

    public function import()
    {
        Schema::disableForeignKeyConstraints();

        Role::truncate();
        User::truncate();
        Artist::truncate();
        Beatmaker::truncate();
        Album::truncate();
        Pack::truncate();
        Prod::truncate();
        Track::truncate();
        Playlist::truncate();
        PlaylistTrack::truncate();
        
        Schema::enableForeignKeyConstraints();

        //ROLE
        $roles = array(
            array(
                "label" => "Admin"
            ),
            array(
                "label" => "User"
            )           
        );

        foreach ($roles as $role) {
            $this->roleManager->import($role);
        }

        //USER
        $role = Role::where('label', 'Admin')->first();
        $role_id = $role->id;
        $users = array(
            array(
              "name" => "Corentin JEANNOT",
              "email" => "corentin.jeannot2a@gmail.com",
              "password" => "Not24get",
              "role_id" => $role_id
            )      
        );

        foreach ($users as $user) {
            $this->userManager->import($user);
        }

        //ARTIST
        $artistes = array(
            array(
                "label" => "Corti",
                "imageUrl" => 'Type Artiste/Artistes/corti.png'
            ),
            array(
                "label" => "Kalu",
                "imageUrl" => 'Type Artiste/Artistes/kalu.png'
            )        
        );

        foreach ($artistes as $artiste) {
            $this->artistManager->import($artiste);
        }

        //BEATMAKER
        $beatmakers = array(
            array(
                "label" => "SynaTracks",
                "imageUrl" => 'Type Artiste/Artistes/synatracks.png'
            )       
        );

        foreach ($beatmakers as $beatmaker) {
            $this->beatmakerManager->import($beatmaker);
        }

        //ALBUM
        $artistCorti = Artist::where('label', 'Corti')->first();
        $artist_idCorti = $artistCorti->id;
        $artistKalu = Artist::where('label', 'Kalu')->first();
        $artist_idKalu = $artistKalu->id;
        $albums = array(
            array(
                "label" => "Nitro",
                "imageUrl" => 'Type Artiste/Albums/corti-nitro.png',
                "duration" => "31:00",
                "artist_id" => $artist_idCorti
            ),
            array(
                "label" => "Charbon",
                "imageUrl" => 'Type Artiste/Albums/kalu-charbon.png',
                "duration" => "31:00",
                "artist_id" => $artist_idKalu
            )      
        );

        foreach ($albums as $album) {
            $this->albumManager->import($album);
        }

        //PACK
        $beatmaker = Beatmaker::where('label', 'SynaTracks')->first();
        $beatmaker_id = $beatmaker->id;
        $packs = array(
            array(
                "label" => "Toon",
                "imageUrl" => 'Type BeatMaker/Packs/Toon.png',
                "duration" => "31:00",
                "beatmaker_id" => $beatmaker_id
            ),
            array(
                "label" => "Rap",
                "imageUrl" => 'Type BeatMaker/Packs/Rap.png',
                "duration" => "31:00",
                "beatmaker_id" => $beatmaker_id
            ),array(
                "label" => "Ice",
                "imageUrl" => 'Type BeatMaker/Packs/Ice.png',
                "duration" => "31:00",
                "beatmaker_id" => $beatmaker_id
            )
        );

        foreach ($packs as $pack) {
            $this->packManager->import($pack);
        }

        //PROD
        $beatmaker = Beatmaker::where('label', 'SynaTracks')->first();
        $beatmaker_id = $beatmaker->id;
        $packToon = Pack::where('label', 'Toon')->first();
        $pack_idToon = $packToon->id;
        $packRap = Pack::where('label', 'Rap')->first();
        $pack_idRap = $packRap->id;
        $packIce = Pack::where('label', 'Ice')->first();
        $pack_idIce = $packIce->id;
        $prods = array(
            array(
                "label" => "Compton",
                "imageUrl" => 'Type BeatMaker/Prods/Compton.png',
                "duration" => "4:02",
                "beatmaker_id" => $beatmaker_id,
                "pack_id" => $pack_idToon
            ),
            array(
                "label" => "Concentrated",
                "imageUrl" => 'Type BeatMaker/Prods/Concentrated.png',
                "duration" => "4:02",
                "beatmaker_id" => $beatmaker_id,
                "pack_id" => $pack_idToon
            ),
            array(
                "label" => "Gold",
                "imageUrl" => 'Type BeatMaker/Prods/Gold.png',
                "duration" => "4:02",
                "beatmaker_id" => $beatmaker_id,
                "pack_id" => $pack_idToon
            ),
            array(
                "label" => "KATANA",
                "imageUrl" => 'Type BeatMaker/Prods/KATANA.png',
                "duration" => "4:02",
                "beatmaker_id" => $beatmaker_id,
                "pack_id" => $pack_idRap
            ),
            array(
                "label" => "COLORS",
                "imageUrl" => 'Type BeatMaker/Prods/COLORS.png',
                "duration" => "4:02",
                "beatmaker_id" => $beatmaker_id,
                "pack_id" => $pack_idRap
            ),
            array(
                "label" => "SHADOW",
                "imageUrl" => 'Type BeatMaker/Prods/SHADOW.png',
                "duration" => "4:02",
                "beatmaker_id" => $beatmaker_id,
                "pack_id" => $pack_idRap
            ),
            array(
                "label" => "EARTH",
                "imageUrl" => 'Type BeatMaker/Prods/EARTH.png',
                "duration" => "4:02",
                "beatmaker_id" => $beatmaker_id,
                "pack_id" => $pack_idRap
            ),
            array(
                "label" => "DESTINY",
                "imageUrl" => 'Type BeatMaker/Prods/DESTINY.png',
                "duration" => "4:02",
                "beatmaker_id" => $beatmaker_id,
                "pack_id" => $pack_idRap
            ),
            array(
                "label" => "UNKNOW",
                "imageUrl" => 'Type BeatMaker/Prods/UNKNOW.png',
                "duration" => "4:02",
                "beatmaker_id" => $beatmaker_id,
                "pack_id" => $pack_idRap
            ),
            array(
                "label" => "LEAKER",
                "imageUrl" => 'Type BeatMaker/Prods/LEAKER.png',
                "duration" => "4:02",
                "beatmaker_id" => $beatmaker_id,
                "pack_id" => $pack_idRap
            ),
            array(
                "label" => "LEGENDE",
                "imageUrl" => 'Type BeatMaker/Prods/LEGENDE.png',
                "duration" => "4:02",
                "beatmaker_id" => $beatmaker_id,
                "pack_id" => $pack_idRap
            ),
            array(
                "label" => "ETERNEL",
                "imageUrl" => 'Type BeatMaker/Prods/ETERNEL.png',
                "duration" => "4:02",
                "beatmaker_id" => $beatmaker_id,
                "pack_id" => $pack_idRap
            ),
            array(
                "label" => "MISERE",
                "imageUrl" => 'Type BeatMaker/Prods/MISERE.png',
                "duration" => "4:02",
                "beatmaker_id" => $beatmaker_id,
                "pack_id" => $pack_idRap
            ),
            array(
                "label" => "TARGET",
                "imageUrl" => 'Type BeatMaker/Prods/TARGET.png',
                "duration" => "4:02",
                "beatmaker_id" => $beatmaker_id,
                "pack_id" => $pack_idRap
            ),
            array(
                "label" => "GLOCK",
                "imageUrl" => 'Type BeatMaker/Prods/GLOCK.png',
                "duration" => "4:02",
                "beatmaker_id" => $beatmaker_id,
                "pack_id" => $pack_idRap
            ),
            array(
                "label" => "NITRO",
                "imageUrl" => 'Type BeatMaker/Prods/NITRO.png',
                "duration" => "4:02",
                "beatmaker_id" => $beatmaker_id,
                "pack_id" => $pack_idRap
            ),
            array(
                "label" => "QLF DREAM",
                "imageUrl" => 'Type BeatMaker/Prods/QLF DREAM.png',
                "duration" => "4:02",
                "beatmaker_id" => $beatmaker_id,
                "pack_id" => $pack_idRap
            ),
            array(
                "label" => "JUNGLE",
                "imageUrl" => 'Type BeatMaker/Prods/JUNGLE.png',
                "duration" => "4:02",
                "beatmaker_id" => $beatmaker_id,
                "pack_id" => $pack_idRap
            ),
            array(
                "label" => "PLANE",
                "imageUrl" => 'Type BeatMaker/Prods/PLANE.png',
                "duration" => "4:02",
                "beatmaker_id" => $beatmaker_id,
                "pack_id" => $pack_idIce
            ),
            array(
                "label" => "VISION",
                "imageUrl" => 'Type BeatMaker/Prods/VISION.png',
                "duration" => "4:02",
                "beatmaker_id" => $beatmaker_id,
                "pack_id" => $pack_idIce
            ),
            array(
                "label" => "HERMANOS",
                "imageUrl" => 'Type BeatMaker/Prods/HERMANOS.png',
                "duration" => "4:02",
                "beatmaker_id" => $beatmaker_id,
                "pack_id" => $pack_idIce
            )
        );

        foreach ($prods as $prod) {
            $this->prodManager->import($prod);
        }

        //TRACK
        $artistCorti = Artist::where('label', 'Corti')->first();
        $artist_idCorti = $artistCorti->id;
        $albumNitro = Album::where('label', 'Nitro')->first();
        $album_idNitro = $albumNitro->id;
        $artistKalu = Artist::where('label', 'Kalu')->first();
        $artist_idKalu = $artistKalu->id;
        $albumCharbon = Album::where('label', 'Charbon')->first();
        $album_idCharbon = $albumCharbon->id;
        $tracks = array(
            array(
                "label" => "Intro",
                "imageUrl" => 'Type Artiste/Albums/corti-nitro.png',
                "duration" => "3:09",
                "artist_id" => $artist_idCorti,
                "album_id" => $album_idNitro
            ),
            array(
                "label" => "Cogite",
                "imageUrl" => 'Type Artiste/Albums/corti-nitro.png',
                "duration" => "3:09",
                "artist_id" => $artist_idCorti,
                "album_id" => $album_idNitro
            ),
            array(
                "label" => "Fly",
                "imageUrl" => 'Type Artiste/Albums/corti-nitro.png',
                "duration" => "3:09",
                "artist_id" => $artist_idCorti,
                "album_id" => $album_idNitro
            ),
            array(
                "label" => "Nitro",
                "imageUrl" => 'Type Artiste/Albums/corti-nitro.png',
                "duration" => "3:09",
                "artist_id" => $artist_idCorti,
                "album_id" => $album_idNitro
            ),
            array(
                "label" => "Nitra",
                "imageUrl" => 'Type Artiste/Albums/corti-nitro.png',
                "duration" => "3:09",
                "artist_id" => $artist_idCorti,
                "album_id" => $album_idNitro
            ),
            array(
                "label" => "Rêve",
                "imageUrl" => 'Type Artiste/Albums/corti-nitro.png',
                "duration" => "3:09",
                "artist_id" => $artist_idCorti,
                "album_id" => $album_idNitro
            ),
            array(
                "label" => "Peace",
                "imageUrl" => 'Type Artiste/Albums/corti-nitro.png',
                "duration" => "3:09",
                "artist_id" => $artist_idCorti,
                "album_id" => $album_idNitro
            ),
            array(
                "label" => "La Piste",
                "imageUrl" => 'Type Artiste/Albums/corti-nitro.png',
                "duration" => "3:09",
                "artist_id" => $artist_idCorti,
                "album_id" => $album_idNitro
            ),
            array(
                "label" => "Ma Ville",
                "imageUrl" => 'Type Artiste/Albums/corti-nitro.png',
                "duration" => "3:09",
                "artist_id" => $artist_idCorti,
                "album_id" => $album_idNitro
            ),
            array(
                "label" => "Transfert d'Ame (Partie 1)",
                "imageUrl" => 'Type Artiste/Albums/corti-nitro.png',
                "duration" => "3:09",
                "artist_id" => $artist_idCorti,
                "album_id" => $album_idNitro
            ),
            array(
                "label" => "Transfert d'Ame (Partie 2)",
                "imageUrl" => 'Type Artiste/Albums/corti-nitro.png',
                "duration" => "3:09",
                "artist_id" => $artist_idCorti,
                "album_id" => $album_idNitro
            ),
            array(
                "label" => "Soir de Lune",
                "imageUrl" => 'Type Artiste/Albums/corti-nitro.png',
                "duration" => "3:09",
                "artist_id" => $artist_idCorti,
                "album_id" => NULL
            ),
            array(
                "label" => "Loin",
                "imageUrl" => 'Type Artiste/Albums/corti-nitro.png',
                "duration" => "3:09",
                "artist_id" => $artist_idCorti,
                "album_id" => NULL
            ),
            array(
                "label" => "Préambule",
                "imageUrl" => 'Type Artiste/Albums/corti-nitro.png',
                "duration" => "3:09",
                "artist_id" => $artist_idCorti,
                "album_id" => NULL
            )   
        );

        foreach ($tracks as $track) {
            $this->trackManager->import($track);
        }

        //PLAYLIST
        $user = User::where('email', 'corentin.jeannot2a@gmail.com')->first();
        $user_id = $user->id;
        $playlists = array(
            array(
                "label" => "Best Of",
                "duration" => "15:09",
                "user_id" => $user_id
            )       
        );

        foreach ($playlists as $playlist) {
            $this->playlistManager->import($playlist);
        }

        //PLAYLISTTRACK
        $playlist = Playlist::where('label', 'Best Of')->first();
        $playlist_id = $playlist->id;
        $trackIntro = Track::where('label', 'Intro')->first();
        $track_idIntro = $trackIntro->id;
        $trackPreambule = Track::where('label', 'Préambule')->first();
        $track_idPreambule = $trackPreambule->id;
        $playlistsTracks = array(
            array(
                "playlist_id" => $playlist_id,
                "track_id" => $track_idIntro
            ),
            array(
                "playlist_id" => $playlist_id,
                "track_id" => $track_idPreambule
            )      
        );

        foreach ($playlistsTracks as $playlistsTrack) {
            $this->playlistTrackManager->import($playlistsTrack);
        }

        return redirect(RouteServiceProvider::HOME)
                ->with('alert', 'success')
                ->with('alert-message', 'Importation effectuée avec succès');
    }
}
