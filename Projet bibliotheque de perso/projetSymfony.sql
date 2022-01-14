DROP DATABASE IF EXISTS projetSymfony;

CREATE DATABASE IF NOT EXISTS projetSymfony;

USE projetSymfony;

CREATE TABLE champions(
    id INT AUTO_INCREMENT,
    nom VARCHAR(64) NOT NULL,
    region VARCHAR(64) NOT NULL,
    hist LONGTEXT NOT NULL,    image LONGTEXT NOT NULL,

    PRIMARY KEY (id)
);

INSERT INTO champions (nom, region, image, hist) VALUES
(
    "Darius", "Noxus", "https://images.contentstack.io/v3/assets/blt187521ff0727be24/bltf982b9e4117d5cc2/60ee0c7d33819c6236259c0f/Darius_0.jpg", "Il n'est pas de plus grand symbole de la puissance de Noxus que Darius, le guerrier le plus craint et le plus endurci de la nation. D'origine modeste, celui qui s'est élevé jusqu'à devenir la Main de Noxus pourfend aujourd'hui les ennemis de l'empire, dont certains sont eux-mêmes des Noxiens. Il ne doute jamais de la justesse de sa cause et ne montre pas la moindre hésitation lorsque sa hache est levée. Ceux qui s'opposent au commandant de la Légion Trifarian ne doivent s'attendre à aucune pitié."
),
(
    "Garen", "Demacia", "https://images.contentstack.io/v3/assets/blt187521ff0727be24/bltda4249a36a7acf13/60ee0dbd66d52e63b8eb6b4f/Garen_0.jpg", "Fier et noble soldat, Garen combat à la tête du Détachement hardi. Héritier des Crownguard, la famille chargée de défendre Demacia et ses idéaux, il est apprécié par ses compatriotes et respecté par ses ennemis. Équipé d'une armure résistante à la magie et d'une épée large, Garen affronte sans faillir les mages et les sorciers dans un véritable tourbillon d'acier."
),
(
    "Vi", "Piltover", "https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Vi_0.jpg", "Autrefois criminelle des quartiers louches de Zaun, Vi est une femme sans peur, mais pas sans reproche, au tempérament bouillant, impulsive, qui n'a qu'un respect mesuré pour les représentants de l'autorité. Vi a grandi seule et a développé d'excellents instincts de survie ainsi qu'un sens de l'humour assez caustique. Aujourd'hui, elle travaille avec les gendarmes pour maintenir l'ordre à Piltover et se sert pour cela de puissants gantelets Hextech qui n'ont peur de frapper ni les plus épais murs de briques ni les suspects."
)

