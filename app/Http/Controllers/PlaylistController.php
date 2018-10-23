<?php

namespace App\Http\Controllers;

use App\Playlist;
use App\Song;
use App\PlayListsSongs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PlaylistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_id = Auth::user()->id;
        $playlist = Playlist::where('user_id', $user_id)->get();
        $ps = PlayListsSongs::all();
        return view('playlists.playlists', compact('playlist', 'ps'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $playlist = new Playlist;
        $playlist->playlist_name = $request->playlistname;
        $playlist->user_id = Auth::user()->id;
        $playlist->save();
        return redirect('/playlists');
    }

    public function addSong($id)
    {
        $playlist = Playlist::find($id);
        $song = Song::all();
        return view('playlists.addsong', compact('playlist', 'song'));
    }

    public function addSongToPlaylist($playlist_id, $song_id)
    {


        $playlist = Playlist::find($playlist_id);
        $song = Song::find($song_id);

        $contains = $playlist->songs->contains($song);

        if(!$contains) {
            $ps = new PlayListsSongs;
            $ps->song_id = $song_id;
            $ps->playlist_id = $playlist_id;
            $ps->save();
        } else {
            $p = PlayListsSongs::where('playlist_id', $playlist_id)->where('song_id', $song_id);
            $p->delete();
        }
        return redirect('/playlists');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Playlist  $playlist
     * @return \Illuminate\Http\Response
     */
    public function show(Playlist $playlist)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Playlist  $playlist
     * @return \Illuminate\Http\Response
     */
    public function edit(Playlist $playlist)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Playlist  $playlist
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Playlist $playlist)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Playlist  $playlist
     * @return \Illuminate\Http\Response
     */
    public function destroy(Playlist $playlist)
    {
        //
    }
}
