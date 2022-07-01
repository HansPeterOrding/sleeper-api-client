@todo: List all known sleeper request with corresponding API methods.

Stand der Dinge:
* Der Ordner Dto beinhaltet 1:1 Repräsentation der Sleeper-Objekte
* Alles im Ordner Dto ist fertig
* Die anderen Klassen (Matchup*) sind derzeit nur "Ideen" für die spätere Umsetzung in einem zweiten Bundle (z.B. SleeperEntities o.Ä.) bzw. direkt im Service selbst. Am liebsten wäre aber etwas wiederverwendbares.
* In diesem Package muss noch der Client selbst (PSR-18 konform) sowie die Ansteuerungs-Klassen für die diversen Endpunkte implementiert werden.
* Es fehlen außerdem noch die Serializer-Informationen



√ GET https://api.sleeper.app/v1/players/nfl
√ GET https://api.sleeper.app/v1/players/<sport>/trending/<type>?lookback_hours=<hours>&limit=<int>
type = add|drop
√ https://api.sleeper.com/players/nfl/research/regular/2021/0
√ https://api.sleeper.com/players/nfl/6797
√ https://api.sleeper.com/players/nfl/LAC/depth_chart

GET https://api.sleeper.app/v1/league/<league_id>/matchups/<week>



√ GET https://api.sleeper.app/v1/league/<league_id>
√ GET https://api.sleeper.app/v1/user/<user_id>/leagues/<sport>/<season>


√ GET https://api.sleeper.app/v1/user/<username>
√ GET https://api.sleeper.app/v1/user/188815879448829952<user_id>

https://sleepercdn.com/avatars/<avatar_id>
https://sleepercdn.com/avatars/thumbs/<avatar_id>

√ GET https://api.sleeper.app/v1/league/<league_id>/users
√ GET https://api.sleeper.app/v1/league/<league_id>/rosters

√ GET https://api.sleeper.app/v1/user/<user_id>/drafts/<sport>/<season>
√ GET https://api.sleeper.app/v1/league/<league_id>/drafts
√ GET https://api.sleeper.app/v1/draft/<draft_id>

√ GET https://api.sleeper.app/v1/draft/<draft_id>/picks

√ GET https://api.sleeper.app/v1/league/<league_id>/winners_bracket
√ GET https://api.sleeper.app/v1/league/<league_id>/loses_bracket

√ GET https://api.sleeper.app/v1/state/nfl

√ https://api.sleeper.com/schedule/nfl/regular/2021

√ GET https://api.sleeper.app/v1/league/<league_id>/traded_picks
√ GET https://api.sleeper.app/v1/draft/<draft_id>/traded_picks


√ GET https://api.sleeper.app/v1/league/<league_id>/transactions/<round>


√ https://api.sleeper.app/projections/nfl/2021?season_type=playoff&position[]=QB&position[]=RB&position[]=TE&position[]=WR&order_by=standard
√ https://api.sleeper.com/projections/nfl/player/2309?season_type=regular&season=2021&grouping=season
√ https://api.sleeper.com/projections/nfl/player/2309?season_type=regular&season=2021&grouping=week

√ https://api.sleeper.com/stats/nfl/2021/1?season_type=regular&position[]=DB&position[]=DL&position[]=LB&position[]=QB&position[]=RB&position[]=TE&position[]=WR&player[]=2309&order_by=pts_ppr
√ https://api.sleeper.com/stats/nfl/player/2309?season_type=regular&season=2021

