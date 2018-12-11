import CGI from '.././components/pages/cgi';
import TAXES from '.././components/pages/taxes';
import faqs from '.././components/pages/faqs';
import infos from '.././components/pages/infos';
import coefficients from '.././components/pages/outils/coefficients';
import tarif_fiscal from '.././components/pages/outils/tarif-fiscal';
import nomenclature from '.././components/pages/outils/nomenclature';
import indexOutil from '.././components/pages/outils/index';
import SingleArticle from '.././components/pages/article-single';


export const routes = [
    {
        path : "/", 
        component : CGI, 
        name : "CGI",
    },
    {
        path : "/taxes", 
        component : TAXES, 
        name : "TAXES",
    },
    {
        path : "/faqs", 
        component : faqs, 
        name : "faqs",
    },
    {
        path : "/infos", 
        component : infos, 
        name : "infos",
    },
    {
        path : "/article/:num/:type", 
        component : SingleArticle, 
        name : "ArticleByNum",
    },
    {
        path : "/articles/:id", 
        component : SingleArticle, 
        name : "ArticleById",
    },
    {
        path : "/outils", 
        component : indexOutil, 
        name : "outil",
    },
    {
        path : "/outils/tarif-fiscal", 
        component : tarif_fiscal, 
        name : "tarif-fiscal",
    },
    {
        path : "/outils/coefficients", 
        component : coefficients, 
        name : "coefficients",
    },
    {
        path : "/outils/nomenclature", 
        component : nomenclature, 
        name : "nomenclature",
    },
];