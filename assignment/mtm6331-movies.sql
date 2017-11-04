-- phpMyAdmin SQL Dump
-- version 4.7.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 03, 2017 at 07:15 PM
-- Server version: 5.6.35
-- PHP Version: 7.0.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mtm6331-movies`
--

-- --------------------------------------------------------

--
-- Table structure for table `genres`
--

DROP TABLE IF EXISTS `genres`;
CREATE TABLE `genres` (
  `genre_id` int(10) UNSIGNED ZEROFILL NOT NULL,
  `genre_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `genres`
--

INSERT INTO `genres` (`genre_id`, `genre_name`) VALUES
(0000000334, 'Action'),
(0000000326, 'Adventure'),
(0000000336, 'Animation'),
(0000000344, 'Biography'),
(0000000337, 'Comedy'),
(0000000338, 'Crime'),
(0000000329, 'Drama'),
(0000000327, 'Family'),
(0000000328, 'Fantasy'),
(0000000331, 'Film-Noir'),
(0000000339, 'History'),
(0000000333, 'Horror'),
(0000000343, 'Music'),
(0000000341, 'Musical'),
(0000000330, 'Mystery'),
(0000000340, 'Romance'),
(0000000335, 'Sci-Fi'),
(0000000332, 'Thriller'),
(0000000342, 'War');

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

DROP TABLE IF EXISTS `movies`;
CREATE TABLE `movies` (
  `movie_id` int(10) UNSIGNED ZEROFILL NOT NULL,
  `movie_title` varchar(120) NOT NULL,
  `movie_year` year(4) NOT NULL,
  `movie_rated` varchar(20) NOT NULL,
  `movie_released` date NOT NULL,
  `movie_runtime` smallint(5) UNSIGNED NOT NULL,
  `movie_plot` text NOT NULL,
  `movie_poster` text NOT NULL,
  `movie_imdbID` varchar(50) NOT NULL,
  `movie_website` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`movie_id`, `movie_title`, `movie_year`, `movie_rated`, `movie_released`, `movie_runtime`, `movie_plot`, `movie_poster`, `movie_imdbID`, `movie_website`) VALUES
(0000000251, 'The Wizard of Oz', 1939, 'G', '1939-08-25', 102, 'Dorothy Gale is swept away from a farm in Kansas to a magical land of Oz in a tornado and embarks on a quest with her new friends to see the Wizard who can help her return home in Kansas and help her friends as well.', 'https://images-na.ssl-images-amazon.com/images/M/MV5BNjUyMTc4MDExMV5BMl5BanBnXkFtZTgwNDg0NDIwMjE@._V1_SX300.jpg', 'tt0032138', 'http://thewizardofoz.warnerbros.com/'),
(0000000252, 'Citizen Kane', 1941, 'APPROVED', '1941-09-05', 119, 'Following the death of a publishing tycoon, news reporters scramble to discover the meaning of his final utterance.', 'https://images-na.ssl-images-amazon.com/images/M/MV5BMTQ2Mjc1MDQwMl5BMl5BanBnXkFtZTcwNzUyOTUyMg@@._V1_SX300.jpg', 'tt0033467', 'N/A'),
(0000000253, 'The Third Man', 1949, 'APPROVED', '1949-08-31', 93, 'Pulp novelist Holly Martins travels to shadowy, postwar Vienna, only to find himself investigating the mysterious death of an old friend, Harry Lime.', 'https://images-na.ssl-images-amazon.com/images/M/MV5BZjQxYmRkMjgtMmZkZi00ZDYyLTk5OTktZWZjZTEzNGZlMWEwXkEyXkFqcGdeQXVyNDYyMDk5MTU@._V1_SX300.jpg', 'tt0041959', 'http://www.rialtopictures.com/thirdman'),
(0000000254, 'Get Out', 2017, 'R', '2017-02-24', 104, 'It\'s time for a young African American to meet with his white girlfriend\'s parents for a weekend in their secluded estate in the woods, but before long, the friendly and polite ambience will give way to a nightmare.', 'https://images-na.ssl-images-amazon.com/images/M/MV5BNTE2Nzg1NjkzNV5BMl5BanBnXkFtZTgwOTgyODMyMTI@._V1_SX300.jpg', 'tt5052448', 'http://www.getoutfilm.com/'),
(0000000255, 'Mad Max: Fury Road', 2015, 'R', '2015-05-15', 120, 'A woman rebels against a tyrannical ruler in postapocalyptic Australia in search for her home-land with the help of a group of female prisoners, a psychotic worshipper, and a drifter named Max.', 'https://images-na.ssl-images-amazon.com/images/M/MV5BMTUyMTE0ODcxNF5BMl5BanBnXkFtZTgwODE4NDQzNTE@._V1_SX300.jpg', 'tt1392190', 'http://www.madmaxmovie.com/'),
(0000000256, 'The Cabinet of Dr. Caligari', 1920, 'UNRATED', '1921-03-19', 67, 'Hypnotist Dr. Caligari uses a somnambulist, Cesare, to commit murders.', 'https://images-na.ssl-images-amazon.com/images/M/MV5BMTY1NzIxOTcxM15BMl5BanBnXkFtZTgwMjY0ODgwNzE@._V1_SX300.jpg', 'tt0010323', 'N/A'),
(0000000257, 'All About Eve', 1950, 'APPROVED', '1950-10-27', 138, 'An ingenue insinuates herself into the company of an established but aging stage actress and her circle of theater friends.', 'https://images-na.ssl-images-amazon.com/images/M/MV5BMTY2MTAzODI5NV5BMl5BanBnXkFtZTgwMjM4NzQ0MjE@._V1_SX300.jpg', 'tt0042192', 'N/A'),
(0000000258, 'Inside Out', 2015, 'PG', '2015-06-19', 95, 'After young Riley is uprooted from her Midwest life and moved to San Francisco, her emotions - Joy, Fear, Anger, Disgust and Sadness - conflict on how best to navigate a new city, house, and school.', 'https://images-na.ssl-images-amazon.com/images/M/MV5BOTgxMDQwMDk0OF5BMl5BanBnXkFtZTgwNjU5OTg2NDE@._V1_SX300.jpg', 'tt2096673', 'https://www.facebook.com/PixarInsideOut'),
(0000000259, 'Metropolis', 1927, 'NOT RATED', '1927-03-13', 153, 'In a futuristic city sharply divided between the working class and the city planners, the son of the city\'s mastermind falls in love with a working class prophet who predicts the coming of a savior to mediate their differences.', 'https://images-na.ssl-images-amazon.com/images/M/MV5BOWI3ZWY3N2MtNjAzOS00ZjE3LTg3N2EtMDRkNjI1NWMyZDVmXkEyXkFqcGdeQXVyNjc1NTYyMjg@._V1_SX300.jpg', 'tt0017136', 'http://www.kino.com/metropolis'),
(0000000260, 'The Godfather', 1972, 'R', '1972-03-24', 175, 'The aging patriarch of an organized crime dynasty transfers control of his clandestine empire to his reluctant son.', 'https://images-na.ssl-images-amazon.com/images/M/MV5BZTRmNjQ1ZDYtNDgzMy00OGE0LWE4N2YtNTkzNWQ5ZDhlNGJmL2ltYWdlL2ltYWdlXkEyXkFqcGdeQXVyNjU0OTQ0OTY@._V1_SX300.jpg', 'tt0068646', 'http://www.thegodfather.com'),
(0000000261, 'E.T. the Extra-Terrestrial', 1982, 'PG', '1982-06-11', 115, 'A troubled child summons the courage to help a friendly alien escape Earth and return to his home world.', 'https://images-na.ssl-images-amazon.com/images/M/MV5BMTQ2ODFlMDAtNzdhOC00ZDYzLWE3YTMtNDU4ZGFmZmJmYTczXkEyXkFqcGdeQXVyMTQxNzMzNDI@._V1_SX300.jpg', 'tt0083866', 'http://www.et20.com/'),
(0000000262, 'Modern Times', 1936, 'G', '1936-02-25', 87, 'The Tramp struggles to live in modern industrial society with the help of a young homeless woman.', 'https://images-na.ssl-images-amazon.com/images/M/MV5BYjJiZjMzYzktNjU0NS00OTkxLWEwYzItYzdhYWJjN2QzMTRlL2ltYWdlL2ltYWdlXkEyXkFqcGdeQXVyNjU0OTQ0OTY@._V1_SX300.jpg', 'tt0027977', 'http://www.kino.com/moderntimes'),
(0000000263, 'Dunkirk', 2017, 'PG-13', '2017-07-21', 106, 'Allied soldiers from Belgium, the British Empire and France are surrounded by the German army and evacuated during a fierce battle in World War II.', 'https://images-na.ssl-images-amazon.com/images/M/MV5BN2YyZjQ0NTEtNzU5MS00NGZkLTg0MTEtYzJmMWY3MWRhZjM2XkEyXkFqcGdeQXVyMDA4NzMyOA@@._V1_SX300.jpg', 'tt5013056', 'http://www.dunkirkmovie.com'),
(0000000264, 'It Happened One Night', 1934, 'UNRATED', '1934-02-22', 105, 'A spoiled heiress running away from her family is helped by a man who is actually a reporter in need of a story.', 'https://images-na.ssl-images-amazon.com/images/M/MV5BYzJmMWE5NjAtNWMyZS00NmFiLWIwMDgtZDE2NzczYWFhNzIzXkEyXkFqcGdeQXVyNjc1NTYyMjg@._V1_SX300.jpg', 'tt0025316', 'N/A'),
(0000000265, 'Moonlight', 2016, 'R', '2016-11-18', 111, 'A chronicle of the childhood, adolescence and burgeoning adulthood of a young, African-American, gay man growing up in a rough neighborhood of Miami.', 'https://images-na.ssl-images-amazon.com/images/M/MV5BNzQxNTIyODAxMV5BMl5BanBnXkFtZTgwNzQyMDA3OTE@._V1_SX300.jpg', 'tt4975722', 'http://moonlight.movie/'),
(0000000266, 'Singin\' in the Rain', 1952, 'APPROVED', '1952-04-11', 103, 'A silent film production company and cast make a difficult transition to sound.', 'https://images-na.ssl-images-amazon.com/images/M/MV5BZDRjNGViMjQtOThlMi00MTA3LThkYzQtNzJkYjBkMGE0YzE1XkEyXkFqcGdeQXVyNDYyMDk5MTU@._V1_SX300.jpg', 'tt0045152', 'http://www.FathomEvents.com'),
(0000000267, 'Casablanca', 1942, 'PG', '1943-01-23', 102, 'In Casablanca in December 1941, a cynical American expatriate encounters a former lover, with unforeseen complications.', 'https://images-na.ssl-images-amazon.com/images/M/MV5BY2IzZGY2YmEtYzljNS00NTM5LTgwMzUtMzM1NjQ4NGI0OTk0XkEyXkFqcGdeQXVyNDYyMDk5MTU@._V1_SX300.jpg', 'tt0034583', 'http://www.FathomEvents.com'),
(0000000268, 'Psycho', 1960, 'APPROVED', '1960-09-08', 109, 'A Phoenix secretary embezzles $40,000 from her employer\'s client, goes on the run, and checks into a remote motel run by a young man under the domination of his mother.', 'https://images-na.ssl-images-amazon.com/images/M/MV5BMzJmNjEzZDYtNGViZC00MTBiLTllZjYtOTY1YjBjZmMyODg0XkEyXkFqcGdeQXVyNjU0OTQ0OTY@._V1_SX300.jpg', 'tt0054215', 'N/A'),
(0000000269, 'Laura', 1944, 'APPROVED', '1944-11-01', 88, 'A police detective falls in love with the woman whose murder he is investigating.', 'https://images-na.ssl-images-amazon.com/images/M/MV5BYWQ0MmRiMjMtM2Y1MC00MTYwLWI4YzktOGI0MjdiNzJlZDc3L2ltYWdlL2ltYWdlXkEyXkFqcGdeQXVyNjc1NTYyMjg@._V1_SX300.jpg', 'tt0037008', 'N/A'),
(0000000270, 'Nosferatu', 1922, 'UNRATED', '1929-06-03', 81, 'Vampire Count Orlok expresses interest in a new residence and real estate agent Hutter\'s wife.', 'https://images-na.ssl-images-amazon.com/images/M/MV5BOTFhNzc2OWYtYTlkMi00ZTNhLWJhMmMtMmM1MTUzMTlkZThmXkEyXkFqcGdeQXVyNTA4NzY1MzY@._V1_SX300.jpg', 'tt0013442', 'N/A'),
(0000000271, 'Snow White and the Seven Dwarfs', 1937, 'G', '1938-02-04', 83, 'Snow White, pursued by a jealous queen, hides with the Dwarfs; the queen soon learns of this and prepares to feed her a poison apple.', 'https://images-na.ssl-images-amazon.com/images/M/MV5BMTQwMzE2Mzc4M15BMl5BanBnXkFtZTcwMTE4NTc1Nw@@._V1_SX300.jpg', 'tt0029583', 'N/A'),
(0000000272, 'A Hard Day\'s Night', 1964, 'G', '1964-07-07', 87, 'A \"typical\" day in the life of The Beatles, including many of their famous songs.', 'https://images-na.ssl-images-amazon.com/images/M/MV5BODQ4NjAwOTkyMl5BMl5BanBnXkFtZTgwMDk4ODA3MTE@._V1_SX300.jpg', 'tt0058182', 'http://www.miramax.com/mm_front/owa/mp.entryPoint?action=0&midStr=1069'),
(0000000273, 'La Grande Illusion', 1937, 'UNRATED', '1938-09-12', 113, 'During the First World War, two French soldiers are captured and imprisoned in a German P.O.W. camp. Several escape attempts follow until they are sent to a seemingly impenetrable fortress which seems impossible to escape from.', 'https://images-na.ssl-images-amazon.com/images/M/MV5BMTg3MTI5NTk0N15BMl5BanBnXkFtZTgwMjU1MDM5MTE@._V1_SX300.jpg', 'tt0028950', 'http://www.rialtopictures.com/grandillusion'),
(0000000274, 'Wonder Woman', 2017, 'PG-13', '2017-06-02', 141, 'When a pilot crashes and tells of conflict in the outside world, Diana, an Amazonian warrior in training, leaves home to fight a war, discovering her full powers and true destiny.', 'https://images-na.ssl-images-amazon.com/images/M/MV5BNDFmZjgyMTEtYTk5MC00NmY0LWJhZjktOWY2MzI5YjkzODNlXkEyXkFqcGdeQXVyMDA4NzMyOA@@._V1_SX300.jpg', 'tt0451279', 'http://wonderwomanfilm.com/'),
(0000000275, 'North by Northwest', 1959, 'APPROVED', '1959-09-26', 136, 'A hapless New York advertising executive is mistaken for a government agent by a group of foreign spies, and is pursued across the country while he looks for a way to survive.', 'https://images-na.ssl-images-amazon.com/images/M/MV5BZDA3NDExMTUtMDlhOC00MmQ5LWExZGUtYmI1NGVlZWI4OWNiXkEyXkFqcGdeQXVyNjc1NTYyMjg@._V1_SX300.jpg', 'tt0053125', 'N/A'),
(0000000276, 'Boyhood', 2014, 'R', '2014-08-15', 165, 'The life of Mason, from early childhood to his arrival at college.', 'https://images-na.ssl-images-amazon.com/images/M/MV5BMTYzNDc2MDc0N15BMl5BanBnXkFtZTgwOTcwMDQ5MTE@._V1_SX300.jpg', 'tt1065073', 'http://www.ifcfilms.com/films/boyhood'),
(0000000277, 'The Battle of Algiers', 1966, 'NOT RATED', '1967-09-20', 121, 'In the 1950s, fear and violence escalate as the people of Algiers fight for independence from the French government.', 'https://images-na.ssl-images-amazon.com/images/M/MV5BYzliNzI5NzgtNDZmNy00NGU4LTg2OTQtMDEzZTRiNDU3ZTI1XkEyXkFqcGdeQXVyMDUyOTUyNQ@@._V1_SX300.jpg', 'tt0058946', 'http://rialtopictures.com/battle.html'),
(0000000278, 'The Big Sick', 2017, 'R', '2017-07-14', 120, 'Pakistan-born comedian Kumail Nanjiani and grad student Emily Gardner fall in love but struggle as their cultures clash. When Emily contracts a mysterious illness, Kumail finds himself forced to face her feisty parents, his family\'s expectations, and his true feelings.', 'https://images-na.ssl-images-amazon.com/images/M/MV5BZWM4YzZjOTEtZmU5ZS00ZTRkLWFiNjAtZTEwNzIzMDM5MjdmXkEyXkFqcGdeQXVyNDg2MjUxNjM@._V1_SX300.jpg', 'tt5462602', 'http://www.thebigsickmovie.com/'),
(0000000279, 'King Kong', 1933, 'PASSED', '1933-04-07', 100, 'A film crew goes to a tropical island for an exotic location shoot and discovers a colossal giant gorilla who takes a shine to their female blonde star. He is then captured and brought back to New York City for public exhibition.', 'https://images-na.ssl-images-amazon.com/images/M/MV5BODM0MTEyMjQxOF5BMl5BanBnXkFtZTgwNzYwNTk1MjE@._V1._CR8.883331298828125,6.5333404541015625,344,488_SY132_CR2,0,89,132_AL_.jpg_V1_SX300.jpg', 'tt0024216', 'N/A'),
(0000000280, 'The Maltese Falcon', 1941, 'APPROVED', '1941-10-18', 100, 'A private detective takes on a case that involves him with three eccentric criminals, a gorgeous liar, and their quest for a priceless statuette.', 'https://images-na.ssl-images-amazon.com/images/M/MV5BMTc4MDEzOTMwMl5BMl5BanBnXkFtZTgwMTc2NjgyMjE@._V1_SX300.jpg', 'tt0033870', 'N/A'),
(0000000281, '12 Years a Slave', 2013, 'R', '2013-11-08', 134, 'In the antebellum United States, Solomon Northup, a free black man from upstate New York, is abducted and sold into slavery.', 'https://images-na.ssl-images-amazon.com/images/M/MV5BMjExMTEzODkyN15BMl5BanBnXkFtZTcwNTU4NTc4OQ@@._V1_SX300.jpg', 'tt2024544', 'http://www.foxsearchlight.com/12yearsaslave/'),
(0000000282, 'Repulsion', 1965, 'NOT RATED', '1965-10-03', 105, 'A sex-repulsed woman who disapproves of her sister\'s boyfriend sinks into depression and has horrific visions of rape and violence.', 'https://images-na.ssl-images-amazon.com/images/M/MV5BZTU5ZThjNzAtNjc4NC00OTViLWIxYTYtODFmMTk5Y2NjZjZiL2ltYWdlL2ltYWdlXkEyXkFqcGdeQXVyNjc1NTYyMjg@._V1_SX300.jpg', 'tt0059646', 'N/A'),
(0000000283, 'Spotlight', 2015, 'R', '2015-11-20', 128, 'The true story of how the Boston Globe uncovered the massive scandal of child molestation and cover-up within the local Catholic Archdiocese, shaking the entire Catholic Church to its core.', 'https://images-na.ssl-images-amazon.com/images/M/MV5BMjIyOTM5OTIzNV5BMl5BanBnXkFtZTgwMDkzODE2NjE@._V1_SX300.jpg', 'tt1895587', 'http://SpotlightTheFilm.com'),
(0000000284, 'Gravity', 2013, 'PG-13', '2013-10-04', 91, 'Two astronauts work together to survive after an accident which leaves them alone in space.', 'https://images-na.ssl-images-amazon.com/images/M/MV5BNjE5MzYwMzYxMF5BMl5BanBnXkFtZTcwOTk4MTk0OQ@@._V1_SX300.jpg', 'tt1454468', 'http://gravitymovie.warnerbros.com/'),
(0000000285, 'Sunset Boulevard', 1950, 'PASSED', '1950-09-29', 110, 'A screenwriter is hired to rework a faded silent film star\'s script only to find himself developing a dangerous relationship.', 'https://images-na.ssl-images-amazon.com/images/M/MV5BMTU0NTkyNzYwMF5BMl5BanBnXkFtZTgwMDU0NDk5MTI@._V1_SX300.jpg', 'tt0043014', 'N/A'),
(0000000286, 'Selma', 2014, 'PG-13', '2015-01-09', 128, 'A chronicle of Dr. Martin Luther King, Jr.\'s campaign to secure equal voting rights via an epic march from Selma to Montgomery, Alabama, in 1965.', 'https://images-na.ssl-images-amazon.com/images/M/MV5BZGZkNzFkYTgtYTBkZC00M2MzLWJhNzUtMGE4YzRhYmU2Zjg0XkEyXkFqcGdeQXVyMTQxNzMzNDI@._V1_SX300.jpg', 'tt1020072', 'http://www.selmamovie.com/'),
(0000000287, 'The Adventures of Robin Hood', 1938, 'PG', '1938-05-14', 102, 'When Prince John and the Norman Lords begin oppressing the Saxon masses in King Richard\'s absence, a Saxon lord fights back as the outlaw leader of a rebel guerrilla army.', 'https://images-na.ssl-images-amazon.com/images/M/MV5BYjZjOTU3MTMtYTM5YS00YjZmLThmNmMtODcwOTM1NmRiMWM2XkEyXkFqcGdeQXVyNjc1NTYyMjg@._V1_SX300.jpg', 'tt0029843', 'N/A'),
(0000000288, 'Rashomon', 1950, 'NOT RATED', '1951-12-26', 88, 'A heinous crime and its aftermath are recalled from differing points of view.', 'https://images-na.ssl-images-amazon.com/images/M/MV5BMTk1MDU5MjQ5NF5BMl5BanBnXkFtZTgwMDM2OTE4MzE@._V1_SX300.jpg', 'tt0042876', 'N/A'),
(0000000289, 'Logan', 2017, 'R', '2017-03-03', 137, 'In the near future, a weary Logan cares for an ailing Professor X, somewhere on the Mexican border. However, Logan\'s attempts to hide from the world, and his legacy, are upended when a young mutant arrives, pursued by dark forces.', 'https://images-na.ssl-images-amazon.com/images/M/MV5BMjQwODQwNTg4OV5BMl5BanBnXkFtZTgwMTk4MTAzMjI@._V1_SX300.jpg', 'tt3315342', 'http://www.foxmovies.com/movies/logan'),
(0000000290, 'Rear Window', 1954, 'APPROVED', '1954-09-01', 112, 'A wheelchair-bound photographer spies on his neighbours from his apartment window and becomes convinced one of them has committed murder.', 'https://images-na.ssl-images-amazon.com/images/M/MV5BNGUxYWM3M2MtMGM3Mi00ZmRiLWE0NGQtZjE5ODI2OTJhNTU0XkEyXkFqcGdeQXVyMTQxNzMzNDI@._V1_SX300.jpg', 'tt0047396', 'N/A'),
(0000000291, 'Taxi Driver', 1976, 'R', '1976-02-08', 113, 'A mentally unstable Vietnam War veteran works as a night-time taxi driver in New York City where the perceived decadence and sleaze feeds his urge for violent action, while attempting to save a preadolescent prostitute in the process.', 'https://images-na.ssl-images-amazon.com/images/M/MV5BNGQxNDgzZWQtZTNjNi00M2RkLWExZmEtNmE1NjEyZDEwMzA5XkEyXkFqcGdeQXVyMTQxNzMzNDI@._V1_SX300.jpg', 'tt0075314', 'N/A'),
(0000000292, 'Star Wars: The Force Awakens', 2015, 'PG-13', '2015-12-18', 136, 'Three decades after the Empire\'s defeat, a new threat arises in the militant First Order. Stormtrooper defector Finn and spare parts scavenger Rey are caught up in the Resistance\'s search for the missing Luke Skywalker.', 'https://images-na.ssl-images-amazon.com/images/M/MV5BOTAzODEzNDAzMl5BMl5BanBnXkFtZTgwMDU1MTgzNzE@._V1_SX300.jpg', 'tt2488496', 'http://starwars.com/'),
(0000000293, 'Argo', 2012, 'R', '2012-10-12', 120, 'Acting under the cover of a Hollywood producer scouting a location for a science fiction film, a CIA agent launches a dangerous operation to rescue six Americans in Tehran during the U.S. hostage crisis in Iran in 1980.', 'https://images-na.ssl-images-amazon.com/images/M/MV5BMTc3MjI0MjM0NF5BMl5BanBnXkFtZTcwMTYxMTQ1OA@@._V1_SX300.jpg', 'tt1024648', 'http://argothemovie.warnerbros.com'),
(0000000294, 'Toy Story 3', 2010, 'G', '2010-06-18', 103, 'The toys are mistakenly delivered to a day-care center instead of the attic right before Andy leaves for college, and it\'s up to Woody to convince the other toys that they weren\'t abandoned and to return home.', 'https://images-na.ssl-images-amazon.com/images/M/MV5BMTgxOTY4Mjc0MF5BMl5BanBnXkFtZTcwNTA4MDQyMw@@._V1_SX300.jpg', 'tt0435761', 'http://www.disney.com/ToyStory'),
(0000000295, 'Toy Story 2', 1999, 'G', '1999-11-24', 92, 'When Woody is stolen by a toy collector, Buzz and his friends vow to rescue him, but Woody finds the idea of immortality in a museum tempting.', 'https://images-na.ssl-images-amazon.com/images/M/MV5BMWM5ZDcxMTYtNTEyNS00MDRkLWI3YTItNThmMGExMWY4NDIwXkEyXkFqcGdeQXVyNjUwNzk3NDc@._V1_SX300.jpg', 'tt0120363', 'http://disney.go.com/toystory/'),
(0000000296, 'Zootopia', 2016, 'PG', '2016-03-04', 108, 'In a city of anthropomorphic animals, a rookie bunny cop and a cynical con artist fox must work together to uncover a conspiracy.', 'https://images-na.ssl-images-amazon.com/images/M/MV5BOTMyMjEyNzIzMV5BMl5BanBnXkFtZTgwNzIyNjU0NzE@._V1_SX300.jpg', 'tt2948356', 'http://movies.disney.com/zootopia'),
(0000000297, 'Bride of Frankenstein', 1935, 'NOT RATED', '1935-05-06', 75, 'Mary Shelley reveals the main characters of her novel survived: Dr. Frankenstein, goaded by an even madder scientist, builds his monster a mate.', 'https://images-na.ssl-images-amazon.com/images/M/MV5BOTUzMzAzMzEzNV5BMl5BanBnXkFtZTgwOTg1NTAwMjE@._V1_SX300.jpg', 'tt0026138', 'N/A'),
(0000000298, 'M', 1931, 'NOT RATED', '1931-08-31', 99, 'When the police in a German city are unable to catch a child-murderer, other criminals join in the manhunt.', 'https://images-na.ssl-images-amazon.com/images/M/MV5BZjIwMTM0ZDEtMTdiMy00NmQ0LWJmYmMtNGJmNmMzZmJlZjVkXkEyXkFqcGdeQXVyNjc1NTYyMjg@._V1_SX300.jpg', 'tt0022100', 'N/A'),
(0000000299, 'The Philadelphia Story', 1940, 'NOT RATED', '1941-01-17', 112, 'When a rich woman\'s ex-husband and a tabloid-type reporter turn up just before her planned remarriage, she begins to learn the truth about herself.', 'https://images-na.ssl-images-amazon.com/images/M/MV5BMjA2NzYzMjE3MF5BMl5BanBnXkFtZTgwNDExMDY0MzE@._V1_SX300.jpg', 'tt0032904', 'N/A'),
(0000000300, 'Alien', 1979, 'R', '1979-06-22', 117, 'After a space merchant vessel perceives an unknown transmission as a distress call, its landing on the source moon finds one of the crew attacked by a mysterious lifeform, and they soon realize that its life cycle has merely begun.', 'https://images-na.ssl-images-amazon.com/images/M/MV5BNDNhN2IxZWItNGEwYS00ZDNhLThiM2UtODU3NWJlZjBkYjQxXkEyXkFqcGdeQXVyMTQxNzMzNDI@._V1_SX300.jpg', 'tt0078748', 'http://www.foxmovies.com/index1.html');

-- --------------------------------------------------------

--
-- Table structure for table `movies_genres`
--

DROP TABLE IF EXISTS `movies_genres`;
CREATE TABLE `movies_genres` (
  `movie_genre_id` int(10) UNSIGNED ZEROFILL NOT NULL,
  `movie_id` int(10) UNSIGNED ZEROFILL NOT NULL,
  `genre_id` int(10) UNSIGNED ZEROFILL NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `movies_genres`
--

INSERT INTO `movies_genres` (`movie_genre_id`, `movie_id`, `genre_id`) VALUES
(0000000671, 0000000251, 0000000326),
(0000000672, 0000000251, 0000000327),
(0000000673, 0000000251, 0000000328),
(0000000674, 0000000252, 0000000329),
(0000000675, 0000000252, 0000000330),
(0000000676, 0000000253, 0000000331),
(0000000677, 0000000253, 0000000330),
(0000000678, 0000000253, 0000000332),
(0000000679, 0000000254, 0000000333),
(0000000680, 0000000254, 0000000330),
(0000000681, 0000000255, 0000000334),
(0000000682, 0000000255, 0000000326),
(0000000683, 0000000255, 0000000335),
(0000000684, 0000000256, 0000000328),
(0000000685, 0000000256, 0000000333),
(0000000686, 0000000256, 0000000330),
(0000000687, 0000000257, 0000000328),
(0000000688, 0000000257, 0000000333),
(0000000689, 0000000257, 0000000330),
(0000000690, 0000000258, 0000000336),
(0000000691, 0000000258, 0000000326),
(0000000692, 0000000258, 0000000337),
(0000000693, 0000000259, 0000000329),
(0000000694, 0000000259, 0000000335),
(0000000695, 0000000260, 0000000338),
(0000000696, 0000000260, 0000000329),
(0000000697, 0000000261, 0000000327),
(0000000698, 0000000261, 0000000335),
(0000000699, 0000000262, 0000000337),
(0000000700, 0000000262, 0000000329),
(0000000701, 0000000262, 0000000327),
(0000000702, 0000000263, 0000000334),
(0000000703, 0000000263, 0000000329),
(0000000704, 0000000263, 0000000339),
(0000000705, 0000000264, 0000000337),
(0000000706, 0000000264, 0000000340),
(0000000707, 0000000265, 0000000337),
(0000000708, 0000000265, 0000000340),
(0000000709, 0000000266, 0000000337),
(0000000710, 0000000266, 0000000341),
(0000000711, 0000000266, 0000000340),
(0000000712, 0000000267, 0000000329),
(0000000713, 0000000267, 0000000340),
(0000000714, 0000000267, 0000000342),
(0000000715, 0000000268, 0000000333),
(0000000716, 0000000268, 0000000330),
(0000000717, 0000000268, 0000000332),
(0000000718, 0000000269, 0000000329),
(0000000719, 0000000269, 0000000331),
(0000000720, 0000000269, 0000000330),
(0000000721, 0000000270, 0000000328),
(0000000722, 0000000270, 0000000333),
(0000000723, 0000000271, 0000000336),
(0000000724, 0000000271, 0000000327),
(0000000725, 0000000271, 0000000328),
(0000000726, 0000000272, 0000000337),
(0000000727, 0000000272, 0000000343),
(0000000728, 0000000272, 0000000341),
(0000000729, 0000000273, 0000000329),
(0000000730, 0000000273, 0000000342),
(0000000731, 0000000274, 0000000334),
(0000000732, 0000000274, 0000000326),
(0000000733, 0000000274, 0000000328),
(0000000734, 0000000275, 0000000334),
(0000000735, 0000000275, 0000000326),
(0000000736, 0000000275, 0000000330),
(0000000737, 0000000276, 0000000334),
(0000000738, 0000000276, 0000000326),
(0000000739, 0000000276, 0000000330),
(0000000740, 0000000277, 0000000329),
(0000000741, 0000000277, 0000000342),
(0000000742, 0000000278, 0000000337),
(0000000743, 0000000278, 0000000329),
(0000000744, 0000000278, 0000000340),
(0000000745, 0000000279, 0000000326),
(0000000746, 0000000279, 0000000333),
(0000000747, 0000000279, 0000000335),
(0000000748, 0000000280, 0000000331),
(0000000749, 0000000280, 0000000330),
(0000000750, 0000000281, 0000000344),
(0000000751, 0000000281, 0000000329),
(0000000752, 0000000281, 0000000339),
(0000000753, 0000000282, 0000000329),
(0000000754, 0000000282, 0000000333),
(0000000755, 0000000282, 0000000332),
(0000000756, 0000000283, 0000000338),
(0000000757, 0000000283, 0000000329),
(0000000758, 0000000283, 0000000339),
(0000000759, 0000000284, 0000000329),
(0000000760, 0000000284, 0000000335),
(0000000761, 0000000284, 0000000332),
(0000000762, 0000000285, 0000000329),
(0000000763, 0000000285, 0000000331),
(0000000764, 0000000286, 0000000344),
(0000000765, 0000000286, 0000000329),
(0000000766, 0000000286, 0000000339),
(0000000767, 0000000287, 0000000334),
(0000000768, 0000000287, 0000000326),
(0000000769, 0000000287, 0000000340),
(0000000770, 0000000288, 0000000338),
(0000000771, 0000000288, 0000000329),
(0000000772, 0000000288, 0000000330),
(0000000773, 0000000289, 0000000334),
(0000000774, 0000000289, 0000000329),
(0000000775, 0000000289, 0000000335),
(0000000776, 0000000290, 0000000330),
(0000000777, 0000000290, 0000000332),
(0000000778, 0000000291, 0000000338),
(0000000779, 0000000291, 0000000329),
(0000000780, 0000000292, 0000000334),
(0000000781, 0000000292, 0000000326),
(0000000782, 0000000292, 0000000328),
(0000000783, 0000000293, 0000000344),
(0000000784, 0000000293, 0000000329),
(0000000785, 0000000293, 0000000339),
(0000000786, 0000000294, 0000000336),
(0000000787, 0000000294, 0000000326),
(0000000788, 0000000294, 0000000337),
(0000000789, 0000000295, 0000000336),
(0000000790, 0000000295, 0000000326),
(0000000791, 0000000295, 0000000337),
(0000000792, 0000000296, 0000000336),
(0000000793, 0000000296, 0000000326),
(0000000794, 0000000296, 0000000337),
(0000000795, 0000000297, 0000000329),
(0000000796, 0000000297, 0000000333),
(0000000797, 0000000297, 0000000335),
(0000000798, 0000000298, 0000000338),
(0000000799, 0000000298, 0000000329),
(0000000800, 0000000298, 0000000330),
(0000000801, 0000000299, 0000000337),
(0000000802, 0000000299, 0000000340),
(0000000803, 0000000300, 0000000333),
(0000000804, 0000000300, 0000000335);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `genres`
--
ALTER TABLE `genres`
  ADD PRIMARY KEY (`genre_id`),
  ADD UNIQUE KEY `genre_name` (`genre_name`);

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`movie_id`);

--
-- Indexes for table `movies_genres`
--
ALTER TABLE `movies_genres`
  ADD PRIMARY KEY (`movie_genre_id`),
  ADD KEY `genre_id` (`genre_id`),
  ADD KEY `movie_id` (`movie_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `genres`
--
ALTER TABLE `genres`
  MODIFY `genre_id` int(10) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=345;
--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `movie_id` int(10) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=301;
--
-- AUTO_INCREMENT for table `movies_genres`
--
ALTER TABLE `movies_genres`
  MODIFY `movie_genre_id` int(10) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=805;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `movies_genres`
--
ALTER TABLE `movies_genres`
  ADD CONSTRAINT `movies_genres_ibfk_1` FOREIGN KEY (`genre_id`) REFERENCES `genres` (`genre_id`),
  ADD CONSTRAINT `movies_genres_ibfk_2` FOREIGN KEY (`movie_id`) REFERENCES `movies` (`movie_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
