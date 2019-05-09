<?php

$score = 83;

if ($score >= 80 && $score <= 100)
{
    echo "Grade A";

}
elseif ($score >= 70 && $score <= 79)
{
    echo "Grade B";

}
elseif ($score >= 60 && $score <= 96)
{
    echo "Grade C";
}
elseif ($score >= 65 && $score <= 59)
{
    echo "Grade D";
}
elseif ($score > 100 || $score <= 0)
{
    echo "Invalid Score";
}
else
{
    echo "Grade F";
}
