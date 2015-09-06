<?php

namespace PhpGitHooks\Command;

final class GoodJobLogo
{
    /**
     * @return string
     */
    public static function paint()
    {
        return '<fg=yellow;options=bold;>
                                               _   _
                 @@@@@@@@@@@@@@@              | |_| |  __   _   _
     @@@@      @@@@@@@@@@@@@@@@@@@            |  _  | / _\ \ \/ /
    @    @   @@@@@@@@@@@@@@@@@@@@@@@          |_| |_| \_\   \  /   _
    @    @  @@@@@@@@   @@@   @@@@@@@@@                      /_/   | |
    @   @  @@@@@@@@@   @@@   @@@@@@@@@@                            //
    @  @   @@@@@@@@@@@@@@@@@@@@@@@@@@@@@        ____                   _         _         _
   @@@@@@@@@ @@@@@@@@@@@@@@@@@@@@@@@@@@@@      / ___|  ___   ___    __| |       | |  ___  | |__
  @         @ @@  @@@@@@@@@@@@@  @@@@@@@@     | |  __ / _ \ / _ \  / _  |    _  | | / _ \ | __ \
 @@         @ @@@  @@@@@@@@@@@  @@@@@@@@@     | |_| / ||_|| ||_|| / /_| |   | |_| | ||_|| ||_/ | _
@@   @@@@@@@@ @@@@  @@@@@@@@@  @@@@@@@@@@      \___/  \___/ \___/ \_____/    \___/  \___/ |___/ |_|
@            @ @@@@           @@@@@@@@@@
@@           @ @@@@@@@@@@@@@@@@@@@@@@@@
 @   @@@@@@@@@ @@@@@@@@@@@@@@@@@@@@@@@
 @@         @ @@@@@@@@@@@@@@@@@@@@@@
  @@@@@@@@@@   @@@@@@@@@@@@@@@@@@@
                 @@@@@@@@@@@@@@@

        </fg=yellow;options=bold;>';
    }
}