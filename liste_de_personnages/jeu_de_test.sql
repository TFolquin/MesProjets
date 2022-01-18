DROP DATABASE IF EXISTS projetLol;

CREATE DATABASE IF NOT EXISTS projetLol;

USE projetLol;

CREATE TABLE champions(
    id INT AUTO_INCREMENT,
    nom VARCHAR(64) NOT NULL,
    region VARCHAR(64) NOT NULL,
    hist LONGTEXT NOT NULL,
    image LONGTEXT NOT NULL,

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
    "Vi", "Piltover", "https://images.contentstack.io/v3/assets/blt187521ff0727be24/blt386aa1a09687ad91/60ee138c43739d6620a57392/Vi_0.jpg", "Autrefois criminelle des quartiers louches de Zaun, Vi est une femme sans peur, mais pas sans reproche, au tempérament bouillant, impulsive, qui n'a qu'un respect mesuré pour les représentants de l'autorité. Vi a grandi seule et a développé d'excellents instincts de survie ainsi qu'un sens de l'humour assez caustique. Aujourd'hui, elle travaille avec les gendarmes pour maintenir l'ordre à Piltover et se sert pour cela de puissants gantelets Hextech qui n'ont peur de frapper ni les plus épais murs de briques ni les suspects."
),
(
    "Teemo", "Bandle", "https://images.contentstack.io/v3/assets/blt187521ff0727be24/blt8ed0ddc56697f275/60ee12deaa9be3239e98d9a2/Teemo_0.jpg", "N'ayant pas peur de braver les obstacles les plus dangereux, Teemo explore le monde avec un enthousiasme débordant et une bonne humeur contagieuse. Yordle au sens moral inflexible, il suit fièrement les préceptes du Code des éclaireurs de Bandle, parfois avec tant d'empressement qu'il en oublie les conséquences néfastes de ses actions. Pour certains, l'existence même des éclaireurs est à remettre en cause. Mais ce qu'il ne faut surtout pas remettre en cause, ce sont les convictions de Teemo !"
),
(
    "Yasuo", "Ionia", "https://images.contentstack.io/v3/assets/blt187521ff0727be24/blt41c476486b063ef8/60ee13df31f9ee2ab08a4dfe/Yasuo_0.jpg", "L'Ionien Yasuo est un épéiste agile et résolu, capable de déchaîner contre ses ennemis la puissance de l'air. Alors qu'il était encore un jeune homme fier, il fut accusé à tort d'avoir assassiné son maître. Incapable de prouver son innocence, il dut fuir et fut finalement contraint de tuer son frère pour se défendre. Plus tard, l'on découvrit l'identité du véritable meurtrier et le frère de Yasuo revint mystérieusement à la vie ; pourtant, Yasuo ne parvenait toujours pas à faire la paix avec sa conscience. Il parcourt désormais le monde, laissant le vent guider sa lame."
),
(
    "Rengar", "Ishtar", "https://images.contentstack.io/v3/assets/blt187521ff0727be24/blt4c3e514b7691fbf8/60ee115b418ee7283c2e76d8/Rengar_0.jpg", "Rengar est un féroce Vastaya chasseur de trophées qui ne vit que pour le frisson de la traque et de l'élimination des proies les plus dangereuses. Il parcourt le monde à la recherche des bêtes les plus féroces, et surtout de Kha'Zix, la créature du Néant qui lui a fait perdre un œil. Rengar ne piste ses proies ni pour la nourriture ni pour la gloire, mais pour la beauté de la poursuite en elle-même."
),
(
    "Thresh", "Iles Obscures", "https://images.contentstack.io/v3/assets/blt187521ff0727be24/blt9fd7de40b070c6d4/60ee12e97a84715a12c2a301/Thresh_0.jpg", "Sadique mais rusé, Thresh est un ambitieux esprit des Îles obscures. Autrefois le gardien d'innombrables secrets des arcanes, il fut terrassé par un pouvoir plus grand que la vie ou la mort, et il s'alimente maintenant des souffrances et des tourments qu'il inflige à d'autres avec une inventivité cruelle. Les souffrances de ses victimes ne se limitent pas à leur enveloppe mortelle, car Thresh fait agoniser leurs âmes, les emprisonnant pour l'éternité dans sa lanterne impie."
),
(
    "Sona", "Demacia", "https://images.contentstack.io/v3/assets/blt187521ff0727be24/bltbf2307aee6365bcf/60ee1228b4019f23086a509c/Sona_0.jpg", "Sona est une virtuose de l'etwahl qui ne s'exprime que par ses accords vibrants et gracieux. Ses manières distinguées lui valent d'être appréciée par la noblesse demacienne, bien que beaucoup soupçonnent ses mélodies envoûtantes de s'apparenter à de la magie, tabou au sein du royaume. Inaudible pour des étrangers, mais comprise par ses compagnons les plus proches, Sona se sert de ses harmonies pour soigner ses alliés blessés, mais également pour frapper ses ennemis par surprise."
)

