#!/bin/bash

DIR=$1
[ -z "$DIR" ] && DIR="."

for i in "$DIR"/*; do
	ANS=${i/${DIR}/}
	ANS=${ANS//\//}
	ANS=${ANS%.*}
	ANS=$(echo "$ANS" | tr [:upper:] [:lower:])
	ANS=${ANS//_/ }
	ANS=${ANS//:/}
	printf "
		Puzzle::create([
			'picture' => \"images/puzzles/${i}\",
			'answer' => \"${ANS}\",
			'user_added' => 1,
			'numberOfGames' => 0,
			'numberOfHits' => 0,
		]);\n"
done
