USE [master]
GO
/****** Object:  Database [Government Excellence]    Script Date: 9/13/2022 2:07:25 PM ******/
CREATE DATABASE [Government Excellence]
 CONTAINMENT = NONE
 ON  PRIMARY 
( NAME = N'Government Excellence', FILENAME = N'C:\Program Files\Microsoft SQL Server\MSSQL15.SQLEXPRESS\MSSQL\DATA\Government Excellence.mdf' , SIZE = 8192KB , MAXSIZE = UNLIMITED, FILEGROWTH = 65536KB )
 LOG ON 
( NAME = N'Government Excellence_log', FILENAME = N'C:\Program Files\Microsoft SQL Server\MSSQL15.SQLEXPRESS\MSSQL\DATA\Government Excellence_log.ldf' , SIZE = 8192KB , MAXSIZE = 2048GB , FILEGROWTH = 65536KB )
 WITH CATALOG_COLLATION = DATABASE_DEFAULT
GO
ALTER DATABASE [Government Excellence] SET COMPATIBILITY_LEVEL = 150
GO
IF (1 = FULLTEXTSERVICEPROPERTY('IsFullTextInstalled'))
begin
EXEC [Government Excellence].[dbo].[sp_fulltext_database] @action = 'enable'
end
GO
ALTER DATABASE [Government Excellence] SET ANSI_NULL_DEFAULT OFF 
GO
ALTER DATABASE [Government Excellence] SET ANSI_NULLS OFF 
GO
ALTER DATABASE [Government Excellence] SET ANSI_PADDING OFF 
GO
ALTER DATABASE [Government Excellence] SET ANSI_WARNINGS OFF 
GO
ALTER DATABASE [Government Excellence] SET ARITHABORT OFF 
GO
ALTER DATABASE [Government Excellence] SET AUTO_CLOSE OFF 
GO
ALTER DATABASE [Government Excellence] SET AUTO_SHRINK OFF 
GO
ALTER DATABASE [Government Excellence] SET AUTO_UPDATE_STATISTICS ON 
GO
ALTER DATABASE [Government Excellence] SET CURSOR_CLOSE_ON_COMMIT OFF 
GO
ALTER DATABASE [Government Excellence] SET CURSOR_DEFAULT  GLOBAL 
GO
ALTER DATABASE [Government Excellence] SET CONCAT_NULL_YIELDS_NULL OFF 
GO
ALTER DATABASE [Government Excellence] SET NUMERIC_ROUNDABORT OFF 
GO
ALTER DATABASE [Government Excellence] SET QUOTED_IDENTIFIER OFF 
GO
ALTER DATABASE [Government Excellence] SET RECURSIVE_TRIGGERS OFF 
GO
ALTER DATABASE [Government Excellence] SET  DISABLE_BROKER 
GO
ALTER DATABASE [Government Excellence] SET AUTO_UPDATE_STATISTICS_ASYNC OFF 
GO
ALTER DATABASE [Government Excellence] SET DATE_CORRELATION_OPTIMIZATION OFF 
GO
ALTER DATABASE [Government Excellence] SET TRUSTWORTHY OFF 
GO
ALTER DATABASE [Government Excellence] SET ALLOW_SNAPSHOT_ISOLATION OFF 
GO
ALTER DATABASE [Government Excellence] SET PARAMETERIZATION SIMPLE 
GO
ALTER DATABASE [Government Excellence] SET READ_COMMITTED_SNAPSHOT OFF 
GO
ALTER DATABASE [Government Excellence] SET HONOR_BROKER_PRIORITY OFF 
GO
ALTER DATABASE [Government Excellence] SET RECOVERY FULL 
GO
ALTER DATABASE [Government Excellence] SET  MULTI_USER 
GO
ALTER DATABASE [Government Excellence] SET PAGE_VERIFY CHECKSUM  
GO
ALTER DATABASE [Government Excellence] SET DB_CHAINING OFF 
GO
ALTER DATABASE [Government Excellence] SET FILESTREAM( NON_TRANSACTED_ACCESS = OFF ) 
GO
ALTER DATABASE [Government Excellence] SET TARGET_RECOVERY_TIME = 60 SECONDS 
GO
ALTER DATABASE [Government Excellence] SET DELAYED_DURABILITY = DISABLED 
GO
ALTER DATABASE [Government Excellence] SET ACCELERATED_DATABASE_RECOVERY = OFF  
GO
ALTER DATABASE [Government Excellence] SET QUERY_STORE = OFF
GO
USE [Government Excellence]
GO
/****** Object:  Table [dbo].[admin_details]    Script Date: 9/13/2022 2:07:25 PM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[admin_details](
	[id] [int] IDENTITY(1,1) NOT NULL,
	[user_id] [int] NULL,
	[cat_id] [int] NULL,
 CONSTRAINT [PK_admin_details] PRIMARY KEY CLUSTERED 
(
	[id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[awards]    Script Date: 9/13/2022 2:07:25 PM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[awards](
	[id] [int] IDENTITY(1,1) NOT NULL,
	[award_name] [nvarchar](150) NULL,
 CONSTRAINT [PK_awards] PRIMARY KEY CLUSTERED 
(
	[id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[BestProject]    Script Date: 9/13/2022 2:07:25 PM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[BestProject](
	[id] [int] IDENTITY(1,1) NOT NULL,
	[creativity_name] [nvarchar](250) NULL,
	[gove_name] [nvarchar](250) NULL,
	[satrt_date] [date] NULL,
	[end_date] [date] NULL,
	[partners] [nvarchar](250) NULL,
	[site_link] [nvarchar](250) NULL,
	[social] [nvarchar](250) NULL,
	[stand_one] [nvarchar](250) NULL,
	[attatch_one] [nvarchar](250) NULL,
	[stand_two] [nvarchar](250) NULL,
	[attatch_two] [nvarchar](250) NULL,
	[stand_three] [nvarchar](250) NULL,
	[attatch_three] [nvarchar](250) NULL,
	[stand_four] [nvarchar](250) NULL,
	[attatch_four] [nvarchar](250) NULL,
	[cat_id] [int] NULL,
	[user_id] [int] NULL,
	[award_id] [int] NULL,
 CONSTRAINT [PK_BestProject] PRIMARY KEY CLUSTERED 
(
	[id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[category]    Script Date: 9/13/2022 2:07:25 PM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[category](
	[id] [int] IDENTITY(1,1) NOT NULL,
	[award_id] [int] NULL,
	[name] [nvarchar](max) NULL,
 CONSTRAINT [PK_category] PRIMARY KEY CLUSTERED 
(
	[id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY] TEXTIMAGE_ON [PRIMARY]
GO
/****** Object:  Table [dbo].[Corporation]    Script Date: 9/13/2022 2:07:25 PM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[Corporation](
	[id] [int] IDENTITY(1,1) NOT NULL,
	[name] [nvarchar](max) NULL,
	[email] [nvarchar](max) NULL,
	[date] [date] NULL,
	[n_employee] [nvarchar](max) NULL,
	[address] [nvarchar](max) NULL,
	[n_pranch] [int] NULL,
	[n_center] [int] NULL,
	[phone] [int] NULL,
	[site] [nvarchar](max) NULL,
	[social] [nvarchar](max) NULL,
	[bio] [nvarchar](max) NULL,
	[main_task] [nvarchar](max) NULL,
	[service] [nvarchar](max) NULL,
	[part] [nvarchar](max) NULL,
	[vision] [nvarchar](max) NULL,
	[message] [nvarchar](max) NULL,
	[ass_goal] [nvarchar](max) NOT NULL,
	[first_criterion] [nvarchar](max) NULL,
	[res_first_criterion] [nvarchar](max) NULL,
	[secand_criterion] [nvarchar](max) NULL,
	[res_secand_criterion] [nvarchar](max) NULL,
	[third_criterion] [nvarchar](max) NULL,
	[res_third_criterion] [nvarchar](max) NULL,
	[attatch_1] [nvarchar](max) NULL,
	[attatch_2] [nvarchar](max) NULL,
	[attatch_3] [nvarchar](max) NULL,
	[attatch_4] [nvarchar](max) NULL,
	[award_id] [int] NULL,
	[cat_id] [int] NULL,
	[user_id] [int] NULL,
 CONSTRAINT [PK_Corporation_1] PRIMARY KEY CLUSTERED 
(
	[id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY] TEXTIMAGE_ON [PRIMARY]
GO
/****** Object:  Table [dbo].[creativity]    Script Date: 9/13/2022 2:07:25 PM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[creativity](
	[id] [int] IDENTITY(1,1) NOT NULL,
	[creativity_name] [nvarchar](250) NULL,
	[gove_name] [nvarchar](250) NULL,
	[satrt_date] [date] NULL,
	[end_date] [date] NULL,
	[partners] [nvarchar](250) NULL,
	[site_link] [nvarchar](250) NULL,
	[social] [nvarchar](250) NULL,
	[stand_one] [nvarchar](250) NULL,
	[attatch_one] [nvarchar](250) NULL,
	[stand_two] [nvarchar](250) NULL,
	[attatch_two] [nvarchar](250) NULL,
	[stand_three] [nvarchar](250) NULL,
	[attatch_three] [nvarchar](250) NULL,
	[stand_four] [nvarchar](250) NULL,
	[attatch_four] [nvarchar](250) NULL,
	[cat_id] [int] NULL,
	[user_id] [int] NULL,
	[award_id] [int] NULL,
 CONSTRAINT [PK_creativity] PRIMARY KEY CLUSTERED 
(
	[id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[employe]    Script Date: 9/13/2022 2:07:25 PM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[employe](
	[id] [int] IDENTITY(1,1) NOT NULL,
	[award_id] [int] NULL,
	[cat_id] [int] NULL,
	[name] [nvarchar](255) NULL,
	[email] [nvarchar](255) NULL,
	[job_name] [nvarchar](255) NULL,
	[side_job] [nvarchar](255) NULL,
	[create_date] [date] NULL,
	[national_id] [nvarchar](50) NULL,
	[phone] [nvarchar](255) NULL,
	[emp_task] [nvarchar](255) NULL,
	[first_criterion] [nvarchar](255) NULL,
	[attach] [nvarchar](255) NULL,
	[secand_criterion] [nvarchar](255) NULL,
	[third_criterion] [nvarchar](255) NULL,
	[fourth_criterion] [nvarchar](max) NULL,
	[fifth_criterion] [nvarchar](max) NULL,
	[attach_2] [nvarchar](max) NULL,
	[attach_3] [nvarchar](max) NULL,
	[attach_4] [nvarchar](max) NULL,
	[attach_5] [nvarchar](max) NULL,
	[emp_task2] [nvarchar](max) NULL,
	[emp_task3] [nvarchar](max) NULL,
	[emp_task4] [nvarchar](max) NULL,
	[user_id] [int] NULL,
 CONSTRAINT [PK_employe] PRIMARY KEY CLUSTERED 
(
	[id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY] TEXTIMAGE_ON [PRIMARY]
GO
/****** Object:  Table [dbo].[leaders]    Script Date: 9/13/2022 2:07:25 PM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[leaders](
	[id] [int] IDENTITY(1,1) NOT NULL,
	[name] [nvarchar](max) NULL,
	[email] [nvarchar](max) NULL,
	[job_name] [nvarchar](max) NULL,
	[side_job] [nvarchar](max) NULL,
	[create_date] [date] NULL,
	[national_id] [nvarchar](max) NULL,
	[phone] [nvarchar](max) NULL,
	[emp_task] [nvarchar](max) NULL,
	[first_criterion] [nvarchar](max) NULL,
	[secand_criterion] [nvarchar](max) NULL,
	[third_criterion] [nvarchar](max) NULL,
	[fourth_criterion] [nvarchar](max) NULL,
	[attach] [nvarchar](max) NULL,
	[attach_2] [nvarchar](max) NULL,
	[attach_3] [nvarchar](max) NULL,
	[attach_4] [nvarchar](max) NULL,
	[emp_task2] [nvarchar](max) NULL,
	[emp_task3] [nvarchar](max) NULL,
	[emp_task4] [nvarchar](max) NULL,
	[cat_id] [int] NULL,
	[award_id] [int] NULL,
	[user_id] [int] NULL,
 CONSTRAINT [PK_leaders] PRIMARY KEY CLUSTERED 
(
	[id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY] TEXTIMAGE_ON [PRIMARY]
GO
/****** Object:  Table [dbo].[sites]    Script Date: 9/13/2022 2:07:25 PM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[sites](
	[id] [int] IDENTITY(1,1) NOT NULL,
	[app_name] [nvarchar](50) NOT NULL,
	[gove_name] [nvarchar](50) NULL,
	[exe_date] [date] NULL,
	[social] [nvarchar](50) NULL,
	[app_store] [nvarchar](50) NULL,
	[stand_one] [nvarchar](50) NULL,
	[attatch_one] [nvarchar](50) NULL,
	[stand_two] [nvarchar](50) NULL,
	[attatch_two] [nvarchar](50) NULL,
	[stand_three] [nvarchar](50) NULL,
	[attatch_three] [nvarchar](50) NULL,
	[cat_id] [int] NULL,
	[user_id] [int] NULL,
	[award_id] [int] NULL,
 CONSTRAINT [PK_sites] PRIMARY KEY CLUSTERED 
(
	[id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[Specialty]    Script Date: 9/13/2022 2:07:25 PM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[Specialty](
	[id] [int] IDENTITY(1,1) NOT NULL,
	[gove_name] [nvarchar](250) NULL,
	[gove_date] [date] NULL,
	[gove_address] [nvarchar](250) NULL,
	[gove_employee] [nvarchar](250) NULL,
	[gove_branch] [nvarchar](250) NULL,
	[gove_center] [nvarchar](250) NULL,
	[gove_email] [nvarchar](250) NULL,
	[gove_phone] [nvarchar](250) NULL,
	[gove_site] [nvarchar](250) NULL,
	[social] [nvarchar](250) NULL,
	[gove_bio] [nvarchar](250) NULL,
	[gove_task] [nvarchar](250) NULL,
	[gove_service] [nvarchar](250) NULL,
	[gove_partner] [nvarchar](250) NULL,
	[gove_view] [nvarchar](250) NULL,
	[gove_maseage] [nvarchar](250) NULL,
	[gove_goal] [nvarchar](250) NULL,
	[stand_one] [nvarchar](250) NULL,
	[attatch_one] [nvarchar](250) NULL,
	[stand_two] [nvarchar](250) NULL,
	[attatch_two] [nvarchar](250) NULL,
	[stand_three] [nvarchar](250) NULL,
	[attatch_three] [nvarchar](250) NULL,
	[gs_effect_three] [nvarchar](250) NULL,
	[cat_id] [int] NULL,
	[user_id] [int] NULL,
	[award_id] [int] NULL,
 CONSTRAINT [PK_Specialty] PRIMARY KEY CLUSTERED 
(
	[id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[taqeem]    Script Date: 9/13/2022 2:07:25 PM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[taqeem](
	[id] [int] IDENTITY(1,1) NOT NULL,
	[mark] [nvarchar](50) NULL,
	[text] [nvarchar](max) NULL,
	[cat_id] [int] NULL,
	[user_id] [int] NULL,
 CONSTRAINT [PK_taqeem] PRIMARY KEY CLUSTERED 
(
	[id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY] TEXTIMAGE_ON [PRIMARY]
GO
/****** Object:  Table [dbo].[team]    Script Date: 9/13/2022 2:07:25 PM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[team](
	[id] [int] IDENTITY(1,1) NOT NULL,
	[award_id] [int] NULL,
	[name_leader] [nvarchar](max) NULL,
	[name] [nvarchar](255) NULL,
	[email] [nvarchar](255) NULL,
	[phone] [nvarchar](max) NULL,
	[job_leader] [nvarchar](max) NULL,
	[name_member1] [nvarchar](max) NULL,
	[job_member1] [nvarchar](max) NULL,
	[name_member2] [nvarchar](max) NULL,
	[job_member2] [nvarchar](max) NULL,
	[name_member3] [nvarchar](max) NULL,
	[job_member3] [nvarchar](max) NULL,
	[name_member4] [nvarchar](max) NULL,
	[job_member4] [nvarchar](max) NULL,
	[name_member5] [nvarchar](max) NULL,
	[job_member5] [nvarchar](max) NULL,
	[create_date] [date] NULL,
	[first_criterion] [nvarchar](max) NULL,
	[attach] [nvarchar](255) NULL,
	[secand_criterion] [nvarchar](max) NULL,
	[third_criterion] [nvarchar](max) NULL,
	[fourth_criterion] [nvarchar](max) NULL,
	[attach_2] [nvarchar](max) NULL,
	[attach_3] [nvarchar](max) NULL,
	[attach_4] [nvarchar](max) NULL,
	[attach_5] [nvarchar](max) NULL,
	[name_team] [nvarchar](max) NULL,
	[site] [nvarchar](max) NULL,
	[addres] [nvarchar](max) NULL,
	[cat_id] [int] NULL,
	[user_id] [int] NULL,
 CONSTRAINT [PK_team] PRIMARY KEY CLUSTERED 
(
	[id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY] TEXTIMAGE_ON [PRIMARY]
GO
/****** Object:  Table [dbo].[unit]    Script Date: 9/13/2022 2:07:25 PM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[unit](
	[id] [int] IDENTITY(1,1) NOT NULL,
	[award_id] [int] NULL,
	[name] [nvarchar](max) NULL,
	[email] [nvarchar](max) NULL,
	[date] [date] NULL,
	[n_employee] [nvarchar](50) NULL,
	[address] [nvarchar](max) NULL,
	[n_pranch] [int] NULL,
	[n_center] [int] NULL,
	[phone] [int] NULL,
	[site] [nvarchar](max) NULL,
	[social] [nvarchar](max) NULL,
	[criterion_1] [nvarchar](max) NULL,
	[criterion_2] [nvarchar](max) NULL,
	[criterion_3] [nvarchar](max) NULL,
	[criterion_4] [nvarchar](max) NULL,
	[criterion_5] [nvarchar](max) NULL,
	[criterion_6] [nvarchar](max) NULL,
	[criterion_7] [nvarchar](max) NULL,
	[criterion_8] [nvarchar](max) NULL,
	[attach_1] [nvarchar](max) NULL,
	[attach_2] [nvarchar](max) NULL,
	[attach_3] [nvarchar](max) NULL,
	[attach_4] [nvarchar](max) NULL,
	[attach_5] [nvarchar](max) NULL,
	[cat_id] [int] NULL,
	[attach_6] [nvarchar](max) NULL,
	[attach_7] [nvarchar](max) NULL,
	[attach_8] [nvarchar](max) NULL,
	[attach_9] [nvarchar](max) NULL,
	[user_id] [int] NULL,
 CONSTRAINT [PK_unit] PRIMARY KEY CLUSTERED 
(
	[id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY] TEXTIMAGE_ON [PRIMARY]
GO
/****** Object:  Table [dbo].[users]    Script Date: 9/13/2022 2:07:25 PM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[users](
	[id] [int] IDENTITY(1,1) NOT NULL,
	[name] [nvarchar](50) NULL,
	[gove_name] [nvarchar](50) NULL,
	[national_id] [nvarchar](50) NOT NULL,
	[username] [nvarchar](50) NULL,
	[password] [nvarchar](50) NULL,
	[role] [int] NULL,
 CONSTRAINT [PK_users] PRIMARY KEY CLUSTERED 
(
	[national_id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
SET IDENTITY_INSERT [dbo].[admin_details] ON 

INSERT [dbo].[admin_details] ([id], [user_id], [cat_id]) VALUES (1, 1, 2)
INSERT [dbo].[admin_details] ([id], [user_id], [cat_id]) VALUES (2, 1, 3)
INSERT [dbo].[admin_details] ([id], [user_id], [cat_id]) VALUES (3, 1, 5)
INSERT [dbo].[admin_details] ([id], [user_id], [cat_id]) VALUES (4, 1, 6)
INSERT [dbo].[admin_details] ([id], [user_id], [cat_id]) VALUES (5, 1, 20)
INSERT [dbo].[admin_details] ([id], [user_id], [cat_id]) VALUES (6, 1, 21)
INSERT [dbo].[admin_details] ([id], [user_id], [cat_id]) VALUES (7, 1, 39)
INSERT [dbo].[admin_details] ([id], [user_id], [cat_id]) VALUES (8, 1, 22)
INSERT [dbo].[admin_details] ([id], [user_id], [cat_id]) VALUES (9, 1, 23)
INSERT [dbo].[admin_details] ([id], [user_id], [cat_id]) VALUES (10, 1, 38)
INSERT [dbo].[admin_details] ([id], [user_id], [cat_id]) VALUES (11, 1, 40)
INSERT [dbo].[admin_details] ([id], [user_id], [cat_id]) VALUES (12, 1, 41)
INSERT [dbo].[admin_details] ([id], [user_id], [cat_id]) VALUES (13, 1, 57)
INSERT [dbo].[admin_details] ([id], [user_id], [cat_id]) VALUES (14, 1, 55)
INSERT [dbo].[admin_details] ([id], [user_id], [cat_id]) VALUES (15, 1, 0)
INSERT [dbo].[admin_details] ([id], [user_id], [cat_id]) VALUES (16, 1, 45)
INSERT [dbo].[admin_details] ([id], [user_id], [cat_id]) VALUES (17, 1, 17)
INSERT [dbo].[admin_details] ([id], [user_id], [cat_id]) VALUES (34, 1, 1)
INSERT [dbo].[admin_details] ([id], [user_id], [cat_id]) VALUES (35, 1, 4)
INSERT [dbo].[admin_details] ([id], [user_id], [cat_id]) VALUES (36, 1, 6)
INSERT [dbo].[admin_details] ([id], [user_id], [cat_id]) VALUES (37, 1, 7)
INSERT [dbo].[admin_details] ([id], [user_id], [cat_id]) VALUES (38, 1, 8)
INSERT [dbo].[admin_details] ([id], [user_id], [cat_id]) VALUES (39, 1, 9)
INSERT [dbo].[admin_details] ([id], [user_id], [cat_id]) VALUES (40, 1, 10)
INSERT [dbo].[admin_details] ([id], [user_id], [cat_id]) VALUES (41, 1, 11)
INSERT [dbo].[admin_details] ([id], [user_id], [cat_id]) VALUES (42, 1, 12)
INSERT [dbo].[admin_details] ([id], [user_id], [cat_id]) VALUES (43, 1, 13)
INSERT [dbo].[admin_details] ([id], [user_id], [cat_id]) VALUES (44, 1, 14)
SET IDENTITY_INSERT [dbo].[admin_details] OFF
GO
SET IDENTITY_INSERT [dbo].[awards] ON 

INSERT [dbo].[awards] ([id], [award_name]) VALUES (1, N'الجائزة الرائدة ')
INSERT [dbo].[awards] ([id], [award_name]) VALUES (2, N'جائزة الوحدة المتميزة فى تقديم الخدمات الحكومية ')
INSERT [dbo].[awards] ([id], [award_name]) VALUES (3, N'جائزة التميز الفردى (قيادات)')
INSERT [dbo].[awards] ([id], [award_name]) VALUES (4, N'جائزة التميز الفردى (أفضل موظف حكومى )')
INSERT [dbo].[awards] ([id], [award_name]) VALUES (5, N'جائزة أفضل موقع وتطبيق حكومى')
INSERT [dbo].[awards] ([id], [award_name]) VALUES (6, N'جائزة الابتكار والابداع')
INSERT [dbo].[awards] ([id], [award_name]) VALUES (7, N'الجائزة المتخصصة')
INSERT [dbo].[awards] ([id], [award_name]) VALUES (8, N'جائزة أفضل فريق عمل ')
INSERT [dbo].[awards] ([id], [award_name]) VALUES (9, N'جائزة المشاريع والمبادرات')
SET IDENTITY_INSERT [dbo].[awards] OFF
GO
SET IDENTITY_INSERT [dbo].[BestProject] ON 

INSERT [dbo].[BestProject] ([id], [creativity_name], [gove_name], [satrt_date], [end_date], [partners], [site_link], [social], [stand_one], [attatch_one], [stand_two], [attatch_two], [stand_three], [attatch_three], [stand_four], [attatch_four], [cat_id], [user_id], [award_id]) VALUES (1, N'FDG', N'2022-09-23', CAST(N'2022-09-09' AS Date), CAST(N'2022-09-28' AS Date), N'DFG', N'FDG', N'DFG', N'DFG', N'~/attachfile/chosse-employee.aspx.designer.cs', N'DFG', N'~/attachfile/chosse-employee.aspx.designer.cs', N'DFG', N'~/attachfile/create_job.aspx', N'DFG', N'~/attachfile/create_job.aspx.cs', 45, 67, 9)
SET IDENTITY_INSERT [dbo].[BestProject] OFF
GO
SET IDENTITY_INSERT [dbo].[category] ON 

INSERT [dbo].[category] ([id], [award_id], [name]) VALUES (1, 9, N'افضل مبادرة في مجال تنمية الاستدامة')
INSERT [dbo].[category] ([id], [award_id], [name]) VALUES (2, 1, N'مدينة')
INSERT [dbo].[category] ([id], [award_id], [name]) VALUES (3, 1, N'مركز ومدينة')
INSERT [dbo].[category] ([id], [award_id], [name]) VALUES (4, 9, N'أفضل مبادرة في مجال تحقيق رؤية مصر2030  ')
INSERT [dbo].[category] ([id], [award_id], [name]) VALUES (5, 1, N'قرية ')
INSERT [dbo].[category] ([id], [award_id], [name]) VALUES (6, 9, N'أفضل مبادرة لتمكين الشباب')
INSERT [dbo].[category] ([id], [award_id], [name]) VALUES (7, 9, N'أفضل مبادرة لتمكين المرأة')
INSERT [dbo].[category] ([id], [award_id], [name]) VALUES (8, 9, N'افضل مبادرة لتطوير التعليم')
INSERT [dbo].[category] ([id], [award_id], [name]) VALUES (9, 9, N'
افضل مبادرة لتطوير القطاع الصحى')
INSERT [dbo].[category] ([id], [award_id], [name]) VALUES (10, 9, N'أفضل مبادرة لتطوير البنية التحتية')
INSERT [dbo].[category] ([id], [award_id], [name]) VALUES (11, 9, N'أفضل مبادرة لتنمية المجتمع')
INSERT [dbo].[category] ([id], [award_id], [name]) VALUES (12, 9, N'أفضل مبادرة لنشر الوعى')
INSERT [dbo].[category] ([id], [award_id], [name]) VALUES (13, 8, N'جائزة أفضل فريق عمل ')
INSERT [dbo].[category] ([id], [award_id], [name]) VALUES (14, 5, N'أفضل تطبيق ذكاء اصطناعي')
INSERT [dbo].[category] ([id], [award_id], [name]) VALUES (17, 2, N'مركز تكنولوجى')
INSERT [dbo].[category] ([id], [award_id], [name]) VALUES (20, 3, N'أفضل مدير عام')
INSERT [dbo].[category] ([id], [award_id], [name]) VALUES (21, 3, N'أفضل مدير ادارة')
INSERT [dbo].[category] ([id], [award_id], [name]) VALUES (22, 4, N'أفضل موظف ')
INSERT [dbo].[category] ([id], [award_id], [name]) VALUES (23, 4, N'أفضل موظفة  ')
INSERT [dbo].[category] ([id], [award_id], [name]) VALUES (38, 4, N'أفضل عامل خدمات معاونة')
INSERT [dbo].[category] ([id], [award_id], [name]) VALUES (39, 4, N'أفضل سائق فى الحملة')
INSERT [dbo].[category] ([id], [award_id], [name]) VALUES (40, 5, N'أفضل تطبيق ذكى ')
INSERT [dbo].[category] ([id], [award_id], [name]) VALUES (41, 5, N'أفضل موقع الكترونى')
INSERT [dbo].[category] ([id], [award_id], [name]) VALUES (45, 9, N'أفضل مبادرة / مشروع ')
INSERT [dbo].[category] ([id], [award_id], [name]) VALUES (55, 7, N'الجهة المتميزة فى تمكين المرأه والصديقة لذوى الهمم وكبار السن')
INSERT [dbo].[category] ([id], [award_id], [name]) VALUES (57, 6, N'أفضل فكرة /مقترح/دراسة لاستشراف المستقبل')
SET IDENTITY_INSERT [dbo].[category] OFF
GO
SET IDENTITY_INSERT [dbo].[Corporation] ON 

INSERT [dbo].[Corporation] ([id], [name], [email], [date], [n_employee], [address], [n_pranch], [n_center], [phone], [site], [social], [bio], [main_task], [service], [part], [vision], [message], [ass_goal], [first_criterion], [res_first_criterion], [secand_criterion], [res_secand_criterion], [third_criterion], [res_third_criterion], [attatch_1], [attatch_2], [attatch_3], [attatch_4], [award_id], [cat_id], [user_id]) VALUES (5, N'محمد', N'shaimaaisdt091@gmail.com', CAST(N'2022-08-31' AS Date), N'88', N'hhhhhhhhh', 7, 7, 12345, N'gggggggg', NULL, N'ggggggggggggggggggggg', N'ggggggggggggg', N'ggggggg', N'ggggggggg', N'ggggggggggggg', N'vvvvvvvvvvvvvvvvv', N'vvvvvvvvvvvvvvvvvvvv', N'ccccccccccccccccccccccccccc', N'ccccccccc', N'cccccccccccc', N'cccccccccccccccccccccc', N'ccccccccccccccccccc', N'cccccccccccccccccccccccccccc', N'~/attachfile/1_5/الجهة الرائدة (1).docx', N'~/attachfile/1_5/أفضل تطبيق حكومي ذكي.docx', N'~/attachfile/1_5/الوحدة المتميزة.docx', N'~/attachfile/1_5/أفضل قيادى.docx', 1, 5, 1)
INSERT [dbo].[Corporation] ([id], [name], [email], [date], [n_employee], [address], [n_pranch], [n_center], [phone], [site], [social], [bio], [main_task], [service], [part], [vision], [message], [ass_goal], [first_criterion], [res_first_criterion], [secand_criterion], [res_secand_criterion], [third_criterion], [res_third_criterion], [attatch_1], [attatch_2], [attatch_3], [attatch_4], [award_id], [cat_id], [user_id]) VALUES (6, N'booking_numper', N'mohamed@mail.com', CAST(N'2022-09-28' AS Date), N'5', N'TTTT', 5, 5, 102204833, N'TTTT', NULL, N'TTT', N'TTTT', N'TTTTT', N'TTTT', N'TTTT', N'TTTT', N'TTTT', N'TTT', N'T', N'T', N'T', N'T', N'T', N'~/attachfile/script.sql', N'~/attachfile/script.sql', N'~/attachfile/script.sql', N'~/attachfile/add_managment.aspx', 1, 2, 2)
INSERT [dbo].[Corporation] ([id], [name], [email], [date], [n_employee], [address], [n_pranch], [n_center], [phone], [site], [social], [bio], [main_task], [service], [part], [vision], [message], [ass_goal], [first_criterion], [res_first_criterion], [secand_criterion], [res_secand_criterion], [third_criterion], [res_third_criterion], [attatch_1], [attatch_2], [attatch_3], [attatch_4], [award_id], [cat_id], [user_id]) VALUES (7, N'4T', N'ahmed.ramadan@mail.com', CAST(N'2022-09-30' AS Date), N'4', N'D', 4, 4, 102204833, N'D', NULL, N'RDT', N'RDT', N'DRT', N'RTD', N'DRT', N'RDT', N'DRT', N'DRT', N'RDT', N'DRT', N'DRT', N'DRT', N'DRT', N'~/attachfile/1/test.sql', N'~/attachfile/1/gx.sql', N'~/attachfile/1/d.sql', N'~/attachfile/1/gx.sql', 1, 2, 1)
INSERT [dbo].[Corporation] ([id], [name], [email], [date], [n_employee], [address], [n_pranch], [n_center], [phone], [site], [social], [bio], [main_task], [service], [part], [vision], [message], [ass_goal], [first_criterion], [res_first_criterion], [secand_criterion], [res_secand_criterion], [third_criterion], [res_third_criterion], [attatch_1], [attatch_2], [attatch_3], [attatch_4], [award_id], [cat_id], [user_id]) VALUES (8, N'booking_numper', N'RT', CAST(N'2022-09-14' AS Date), N'4', N'TTTT', 4, 4, 102204833, N'E', NULL, N'WET', N'ETE', N'WER', N'EWR', N'WER', N'WER', N'WER', N'WER', N'WER', N'EWR', N'WER', N'WER', N'EWR', N'~/attachfile/1_2/test.sql', N'~/attachfile/1_2/New Text Document.txt', N'~/attachfile/1_2/New Text Document (2).txt', N'~/attachfile/1_2/last.sql', 1, 2, 1)
SET IDENTITY_INSERT [dbo].[Corporation] OFF
GO
SET IDENTITY_INSERT [dbo].[creativity] ON 

INSERT [dbo].[creativity] ([id], [creativity_name], [gove_name], [satrt_date], [end_date], [partners], [site_link], [social], [stand_one], [attatch_one], [stand_two], [attatch_two], [stand_three], [attatch_three], [stand_four], [attatch_four], [cat_id], [user_id], [award_id]) VALUES (1, N'GF', N'2022-09-16', CAST(N'2022-09-05' AS Date), CAST(N'2022-09-30' AS Date), N'DF', N'DF', N'DF', N'DF', N'~/attachfile/Dashboard.Master', N'DF', N'~/attachfile/Dashboard.Master.designer.cs', N'DF', N'~/attachfile/Dashboard.Master.designer.cs', N'DF', N'~/attachfile/Dashboard.Master.cs', 57, 67, 6)
INSERT [dbo].[creativity] ([id], [creativity_name], [gove_name], [satrt_date], [end_date], [partners], [site_link], [social], [stand_one], [attatch_one], [stand_two], [attatch_two], [stand_three], [attatch_three], [stand_four], [attatch_four], [cat_id], [user_id], [award_id]) VALUES (2, N'df', N'2022-08-31', CAST(N'2022-09-02' AS Date), CAST(N'2022-09-26' AS Date), N'df', N'df', N'df', N'df', N'~/attachfile/chosse-employee.aspx.cs', N'df', N'~/attachfile/chosse-employee.aspx.designer.cs', N'df', N'~/attachfile/create_job.aspx.designer.cs', N'df', N'~/attachfile/Dashboard.Master', 57, 67, 6)
SET IDENTITY_INSERT [dbo].[creativity] OFF
GO
SET IDENTITY_INSERT [dbo].[leaders] ON 

INSERT [dbo].[leaders] ([id], [name], [email], [job_name], [side_job], [create_date], [national_id], [phone], [emp_task], [first_criterion], [secand_criterion], [third_criterion], [fourth_criterion], [attach], [attach_2], [attach_3], [attach_4], [emp_task2], [emp_task3], [emp_task4], [cat_id], [award_id], [user_id]) VALUES (1, N'sdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsd', N'ss@gg.com', N'kkkkkkkkkkkkkkkk', N'kkkkkkkkkkkkkkkkkk', CAST(N'2022-08-30' AS Date), N'5555555555555555555', N'555555555', N'kkkkkkkkkkkkkkkkkkkkkkk', N'kkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkk', N'kkkkkkkkkkkkkkkkkkkkkkkkk', N'kkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkk', NULL, N'~/attachfile/جائزة افضل مبادرة وابتكار (2).docx', N'~/attachfile/جائزة افضل مبادرة وابتكار (1).docx', N'~/attachfile/n4.docx', NULL, N'kkkkkkkkkkkkkkkkkk', N'kkkkkkkkkkkkkkkkkkkkkk', N'kkkkkkkkkkkkkkkkkkkk', 20, 3, 1)
INSERT [dbo].[leaders] ([id], [name], [email], [job_name], [side_job], [create_date], [national_id], [phone], [emp_task], [first_criterion], [secand_criterion], [third_criterion], [fourth_criterion], [attach], [attach_2], [attach_3], [attach_4], [emp_task2], [emp_task3], [emp_task4], [cat_id], [award_id], [user_id]) VALUES (2, N'edudd', N'shaimaaisdt091@gmail.com', N'ccc', N'ccccccc', CAST(N'2022-08-31' AS Date), N'44444444', N'444444', N'', N'cccccccccccccccccc', N'cccccccccccc', N'cccccccccccccc', NULL, N'~/attachfile/جائزة افضل مبادرة وابتكار (2).docx', N'~/attachfile/الجهة الرائدة (2).docx', N'~/attachfile/الجهة الرائدة (1).docx', NULL, N'', N'', N'', 20, 3, 1)
SET IDENTITY_INSERT [dbo].[leaders] OFF
GO
SET IDENTITY_INSERT [dbo].[sites] ON 

INSERT [dbo].[sites] ([id], [app_name], [gove_name], [exe_date], [social], [app_store], [stand_one], [attatch_one], [stand_two], [attatch_two], [stand_three], [attatch_three], [cat_id], [user_id], [award_id]) VALUES (1, N'df', N'df', CAST(N'2022-09-29' AS Date), N'df', N'df', N'df', N'~/attachfile/chosse-employee.aspx', N'df', N'~/attachfile/chosse-employee.aspx.cs', N'df', N'~/attachfile/Dashboard.Master', 40, 67, NULL)
SET IDENTITY_INSERT [dbo].[sites] OFF
GO
SET IDENTITY_INSERT [dbo].[Specialty] ON 

INSERT [dbo].[Specialty] ([id], [gove_name], [gove_date], [gove_address], [gove_employee], [gove_branch], [gove_center], [gove_email], [gove_phone], [gove_site], [social], [gove_bio], [gove_task], [gove_service], [gove_partner], [gove_view], [gove_maseage], [gove_goal], [stand_one], [attatch_one], [stand_two], [attatch_two], [stand_three], [attatch_three], [gs_effect_three], [cat_id], [user_id], [award_id]) VALUES (1, N'sdf', CAST(N'2022-09-07' AS Date), N'sdf', N'4', N'4', N'4', N'ahmed.ramadan@mail.com', N'4', N'sdf', N'sdf', N'sdf', N'sdf', N'dfs', N'dsf', N'fsd', N'fds', N'fds', N'fds', N'~/attachfile/chosse-employee.aspx.designer.cs', N'fd', N'~/attachfile/create_job.aspx', N'fd', N'~/attachfile/chosse-employee.aspx.cs', N'~/attachfile/chosse-employee.aspx.cs', 55, 67, 7)
INSERT [dbo].[Specialty] ([id], [gove_name], [gove_date], [gove_address], [gove_employee], [gove_branch], [gove_center], [gove_email], [gove_phone], [gove_site], [social], [gove_bio], [gove_task], [gove_service], [gove_partner], [gove_view], [gove_maseage], [gove_goal], [stand_one], [attatch_one], [stand_two], [attatch_two], [stand_three], [attatch_three], [gs_effect_three], [cat_id], [user_id], [award_id]) VALUES (2, N'A', CAST(N'2022-09-27' AS Date), N'fgh', N'6', N'6', N'6', N'mohamed@mail.com', N'0102204833', N'fgh', N'fgh', N'fgh', N'fgh', N'fgh', N'fgh', N'fghfgh', N'fghfgh', N'fgh', N'fghf', N'attachfile/1create_job.aspx.cs', N'fgh', N'attachfile/1chosse-employee.aspx', N'fgh', N'attachfile/1add_managment.aspx.cs', N'attachfile/1add_managment.aspx.cs', 55, 1, 7)
INSERT [dbo].[Specialty] ([id], [gove_name], [gove_date], [gove_address], [gove_employee], [gove_branch], [gove_center], [gove_email], [gove_phone], [gove_site], [social], [gove_bio], [gove_task], [gove_service], [gove_partner], [gove_view], [gove_maseage], [gove_goal], [stand_one], [attatch_one], [stand_two], [attatch_two], [stand_three], [attatch_three], [gs_effect_three], [cat_id], [user_id], [award_id]) VALUES (3, N'thth', CAST(N'2022-09-17' AS Date), N'z', N'6', N'6', N'6', N'mmelnobey92@gmail.com', N'0102204833', N'rh', N'ehr', N'erh', N'erh', N'erh', N'rhe', N'erh', N'rehe', N'rh', N'erh', N'~/attachfile/1create_job.aspx.cs', N'rhe', N'~/attachfile/1create_job.aspx', N'erh', N'~/attachfile/1chosse-employee.aspx.cs', N'~/attachfile/1chosse-employee.aspx.cs', 55, 1, 7)
INSERT [dbo].[Specialty] ([id], [gove_name], [gove_date], [gove_address], [gove_employee], [gove_branch], [gove_center], [gove_email], [gove_phone], [gove_site], [social], [gove_bio], [gove_task], [gove_service], [gove_partner], [gove_view], [gove_maseage], [gove_goal], [stand_one], [attatch_one], [stand_two], [attatch_two], [stand_three], [attatch_three], [gs_effect_three], [cat_id], [user_id], [award_id]) VALUES (4, N'rth', CAST(N'2022-09-10' AS Date), N'rth', N'5', N'5', N'5', N'mohamed@mail.com', N'0102204833', N'thtr', N'rty', N'rty', N'rty', N'try', N'rty', N'rty', N'rty', N'rty', N'rty', N'~/attachfile/1/create_job.aspx', N'rty', N'~/attachfile/1/chosse-employee.aspx.cs', N'rty', N'~/attachfile/1/add_managment.aspx.cs', N'~/attachfile/1/add_managment.aspx.cs', 55, 1, 7)
SET IDENTITY_INSERT [dbo].[Specialty] OFF
GO
SET IDENTITY_INSERT [dbo].[taqeem] ON 

INSERT [dbo].[taqeem] ([id], [mark], [text], [cat_id], [user_id]) VALUES (1, N'99', N'ddfhdfh', 2, 0)
INSERT [dbo].[taqeem] ([id], [mark], [text], [cat_id], [user_id]) VALUES (2, N'55', N'fghfghfgh', 2, 1)
INSERT [dbo].[taqeem] ([id], [mark], [text], [cat_id], [user_id]) VALUES (3, N'51', N'لايوجد ', 2, 1)
INSERT [dbo].[taqeem] ([id], [mark], [text], [cat_id], [user_id]) VALUES (4, N'65', N'يلسليبل', 2, 1)
INSERT [dbo].[taqeem] ([id], [mark], [text], [cat_id], [user_id]) VALUES (5, N'36', N'هغعهغعهغعه', 5, 1)
INSERT [dbo].[taqeem] ([id], [mark], [text], [cat_id], [user_id]) VALUES (6, N'44', N'yyukyuk', 5, 1)
INSERT [dbo].[taqeem] ([id], [mark], [text], [cat_id], [user_id]) VALUES (7, N'65', N'hjghj', 17, 1)
INSERT [dbo].[taqeem] ([id], [mark], [text], [cat_id], [user_id]) VALUES (8, N'55', N'iliui', 2, 1)
INSERT [dbo].[taqeem] ([id], [mark], [text], [cat_id], [user_id]) VALUES (9, N'55', N'gfdg', 2, 1)
INSERT [dbo].[taqeem] ([id], [mark], [text], [cat_id], [user_id]) VALUES (10, N'55', N'gfdg', 2, 1)
INSERT [dbo].[taqeem] ([id], [mark], [text], [cat_id], [user_id]) VALUES (11, N'65', N'ukykyuk', 2, 1)
SET IDENTITY_INSERT [dbo].[taqeem] OFF
GO
SET IDENTITY_INSERT [dbo].[team] ON 

INSERT [dbo].[team] ([id], [award_id], [name_leader], [name], [email], [phone], [job_leader], [name_member1], [job_member1], [name_member2], [job_member2], [name_member3], [job_member3], [name_member4], [job_member4], [name_member5], [job_member5], [create_date], [first_criterion], [attach], [secand_criterion], [third_criterion], [fourth_criterion], [attach_2], [attach_3], [attach_4], [attach_5], [name_team], [site], [addres], [cat_id], [user_id]) VALUES (1, 7, N'wwwwwwwww', N'gggggg', N'shaimaaisdt091@gmail.com', N'6666666', N'gggggg', N'', N'', N'', N'', N'', N'', N'', N'', N'', N'', CAST(N'2022-08-31' AS Date), N'ggggggggg', N'~/attachfile/أفضل قيادى (4).docx', N'gggggggggggggg', N'ggggggggggggggg', N'gggggggggggggggggggg', N'~/attachfile/أفضل قيادى (2).docx', N'~/attachfile/الوحدة المتميزة.docx', N'~/attachfile/الوحدة المتميزة.docx', N'~/attachfile/الجهة الرائدة (2).docx', N'wwwwwww', NULL, N'ggggg', NULL, NULL)
INSERT [dbo].[team] ([id], [award_id], [name_leader], [name], [email], [phone], [job_leader], [name_member1], [job_member1], [name_member2], [job_member2], [name_member3], [job_member3], [name_member4], [job_member4], [name_member5], [job_member5], [create_date], [first_criterion], [attach], [secand_criterion], [third_criterion], [fourth_criterion], [attach_2], [attach_3], [attach_4], [attach_5], [name_team], [site], [addres], [cat_id], [user_id]) VALUES (2, 7, N'rty', N'rty', N'mohamed@mail.com', N'0102204833', N'rty', N'eret', N'ert', N'ert', N'ert', N'ert', N'ert', N'ert', N'rte', N'ert', N'rte', CAST(N'2022-09-09' AS Date), N'ert', N'~/attachfile/create_job.aspx.designer.cs', N'rte', N'rte', N'rte', N'~/attachfile/Dashboard.Master.cs', N'~/attachfile/home.aspx', N'~/attachfile/create_job.aspx.cs', N'~/attachfile/chosse-employee.aspx.designer.cs', N'ryrty', NULL, N'rty', NULL, 67)
SET IDENTITY_INSERT [dbo].[team] OFF
GO
SET IDENTITY_INSERT [dbo].[unit] ON 

INSERT [dbo].[unit] ([id], [award_id], [name], [email], [date], [n_employee], [address], [n_pranch], [n_center], [phone], [site], [social], [criterion_1], [criterion_2], [criterion_3], [criterion_4], [criterion_5], [criterion_6], [criterion_7], [criterion_8], [attach_1], [attach_2], [attach_3], [attach_4], [attach_5], [cat_id], [attach_6], [attach_7], [attach_8], [attach_9], [user_id]) VALUES (1, 2, N'fgj', N'mohamed@mail.com', CAST(N'2022-09-20' AS Date), N'6', N'fjg', 5, 5, 102204833, N'ftu', NULL, N'ftu', N'ftu', N'ftu', N'ftu', N'ftu', N'ftu', N'ftu', N'ftu', N'~/attachfile/create_job.aspx.designer.cs', N'~/attachfile/Dashboard.Master', N'~/attachfile/Dashboard.Master.designer.cs', N'~/attachfile/Dashboard.Master', N'~/attachfile/create_job.aspx.designer.cs', 17, N'~/attachfile/Dashboard.Master', N'~/attachfile/Dashboard.Master.designer.cs', N'~/attachfile/Dashboard.Master', N'~/attachfile/Dashboard.Master', 1)
SET IDENTITY_INSERT [dbo].[unit] OFF
GO
SET IDENTITY_INSERT [dbo].[users] ON 

INSERT [dbo].[users] ([id], [name], [gove_name], [national_id], [username], [password], [role]) VALUES (1, N'mokhtar', N'التحول الرقمي', N'29208152801075', N'mokhtar', N'123456', 3)
SET IDENTITY_INSERT [dbo].[users] OFF
GO
ALTER TABLE [dbo].[category]  WITH CHECK ADD  CONSTRAINT [FK_category_awards] FOREIGN KEY([award_id])
REFERENCES [dbo].[awards] ([id])
GO
ALTER TABLE [dbo].[category] CHECK CONSTRAINT [FK_category_awards]
GO
ALTER TABLE [dbo].[creativity]  WITH CHECK ADD  CONSTRAINT [FK_creativity_category] FOREIGN KEY([cat_id])
REFERENCES [dbo].[category] ([id])
GO
ALTER TABLE [dbo].[creativity] CHECK CONSTRAINT [FK_creativity_category]
GO
ALTER TABLE [dbo].[employe]  WITH CHECK ADD  CONSTRAINT [FK_employe_category] FOREIGN KEY([cat_id])
REFERENCES [dbo].[category] ([id])
GO
ALTER TABLE [dbo].[employe] CHECK CONSTRAINT [FK_employe_category]
GO
ALTER TABLE [dbo].[sites]  WITH CHECK ADD  CONSTRAINT [FK_sites_category] FOREIGN KEY([cat_id])
REFERENCES [dbo].[category] ([id])
GO
ALTER TABLE [dbo].[sites] CHECK CONSTRAINT [FK_sites_category]
GO
ALTER TABLE [dbo].[Specialty]  WITH CHECK ADD  CONSTRAINT [FK_Specialty_category] FOREIGN KEY([cat_id])
REFERENCES [dbo].[category] ([id])
GO
ALTER TABLE [dbo].[Specialty] CHECK CONSTRAINT [FK_Specialty_category]
GO
ALTER TABLE [dbo].[taqeem]  WITH CHECK ADD  CONSTRAINT [FK_taqeem_category] FOREIGN KEY([cat_id])
REFERENCES [dbo].[category] ([id])
GO
ALTER TABLE [dbo].[taqeem] CHECK CONSTRAINT [FK_taqeem_category]
GO
ALTER TABLE [dbo].[team]  WITH CHECK ADD  CONSTRAINT [FK_team_category] FOREIGN KEY([cat_id])
REFERENCES [dbo].[category] ([id])
GO
ALTER TABLE [dbo].[team] CHECK CONSTRAINT [FK_team_category]
GO
ALTER TABLE [dbo].[unit]  WITH CHECK ADD  CONSTRAINT [FK_unit_category1] FOREIGN KEY([cat_id])
REFERENCES [dbo].[category] ([id])
GO
ALTER TABLE [dbo].[unit] CHECK CONSTRAINT [FK_unit_category1]
GO
/****** Object:  StoredProcedure [dbo].[add_user_admin]    Script Date: 9/13/2022 2:07:25 PM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE proc [dbo].[add_user_admin]

@user_id nvarchar(50),

@role int

as
begin

update users set role=@role where id = @user_id

end


GO
/****** Object:  StoredProcedure [dbo].[award_BestProject]    Script Date: 9/13/2022 2:07:25 PM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE proc [dbo].[award_BestProject]

@creativity_name nvarchar(250),
@gove_name nvarchar(250),
@satrt_date date,
@send_date date,
@partner nvarchar(250),
@site_link nvarchar(250),
@social nvarchar(250),

@stand_one nvarchar(250),
@attatch_one nvarchar(250),
@stand_two nvarchar(250),
@attatch_two nvarchar(250),
@stand_three nvarchar(250),
@attatch_three nvarchar(250),
@stand_four nvarchar(250),
@attatch_four nvarchar(250),
@cat_id int,
@user_id int,
@awards int






as
begin
insert into BestProject values (@creativity_name,@gove_name,@satrt_date,@send_date,@partner,@site_link,@social,@stand_one,@attatch_one,@stand_two,@attatch_two,@stand_three,@attatch_three,@stand_four,@attatch_four,@cat_id,@user_id,@awards) 
end


GO
/****** Object:  StoredProcedure [dbo].[award_creativity]    Script Date: 9/13/2022 2:07:25 PM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE proc [dbo].[award_creativity]

@creativity_name nvarchar(250),
@gove_name nvarchar(250),
@satrt_date date,
@send_date date,
@partner nvarchar(250),
@site_link nvarchar(250),
@social nvarchar(250),

@stand_one nvarchar(250),
@attatch_one nvarchar(250),
@stand_two nvarchar(250),
@attatch_two nvarchar(250),
@stand_three nvarchar(250),
@attatch_three nvarchar(250),
@stand_four nvarchar(250),
@attatch_four nvarchar(250),
@cat_id int,
@user_id int,
@awards int






as
begin
insert into creativity values (@creativity_name,@gove_name,@satrt_date,@send_date,@partner,@site_link,@social,@stand_one,@attatch_one,@stand_two,@attatch_two,@stand_three,@attatch_three,@stand_four,@attatch_four,@cat_id,@user_id,@awards) 
end


GO
/****** Object:  StoredProcedure [dbo].[award_site]    Script Date: 9/13/2022 2:07:25 PM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE proc [dbo].[award_site]


@app_name nvarchar(250),
@gove_name nvarchar(250),
@exe_date date,

@social nvarchar(250),
@app_store nvarchar(250),
@stand_one nvarchar(250),
@attatch_one nvarchar(250),
@stand_two nvarchar(250),
@attatch_two nvarchar(250),
@stand_three nvarchar(250),
@attatch_three nvarchar(250),
@cat_id int,
@awards int,
@user_id int





as
begin
insert into sites values (@app_name,@gove_name,@exe_date,@social,@app_store,@stand_one,@attatch_one,@stand_two,@attatch_two,@stand_three,@attatch_three,@cat_id,@user_id,@awards) 
end


GO
/****** Object:  StoredProcedure [dbo].[award_specialty]    Script Date: 9/13/2022 2:07:25 PM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE proc [dbo].[award_specialty]


@gove_name nvarchar(250),
@gove_date date,
@gove_employee nvarchar(250),
@gove_address nvarchar(250),
@gove_branch nvarchar(250),
@gove_email nvarchar(250),
@gove_phone nvarchar(250),
@gove_site nvarchar(250),
@social nvarchar(250),
@gove_bio nvarchar(250),
@gove_task nvarchar(250),
@gove_service nvarchar(250),
@gove_partner nvarchar(250),
@gove_view nvarchar(250),
@gove_maseage nvarchar(250),
@gove_goal nvarchar(250),
@gove_center nvarchar(250),

@stand_one nvarchar(250),
@attatch_one nvarchar(250),
@stand_two nvarchar(250),
@attatch_two nvarchar(250),
@stand_three nvarchar(250),
@attatch_three nvarchar(250),
@gs_effect_three nvarchar(250),
@cat_id int,
@user_id int,
@awards int


as
begin
insert into Specialty values (@gove_name,@gove_date,@gove_address,@gove_employee,@gove_branch,@gove_center,@gove_email,@gove_phone,@gove_site,@social,@gove_bio,@gove_task,@gove_service,@gove_partner,@gove_view,@gove_maseage,@gove_goal,@stand_one,@attatch_one,@stand_two,@attatch_two,@stand_three,@attatch_three,@gs_effect_three,@cat_id,@user_id,@awards) 
end


GO
/****** Object:  StoredProcedure [dbo].[get_access_award]    Script Date: 9/13/2022 2:07:25 PM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE proc [dbo].[get_access_award]

@user_id int

as
begin


select name,category.id from category join admin_details on admin_details.cat_id = category.id where admin_details.user_id = @user_id and category.award_id = 1

end
GO
/****** Object:  StoredProcedure [dbo].[get_access_creativity]    Script Date: 9/13/2022 2:07:25 PM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE proc [dbo].[get_access_creativity]

@user_id int

as
begin


select name,category.id from category join admin_details on admin_details.cat_id = category.id where admin_details.user_id = @user_id and category.award_id = 6

end
GO
/****** Object:  StoredProcedure [dbo].[get_access_employe]    Script Date: 9/13/2022 2:07:25 PM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE proc [dbo].[get_access_employe]

@user_id int

as
begin


select name,category.id from category join admin_details on admin_details.cat_id = category.id where admin_details.user_id = @user_id and category.award_id = 4

end
GO
/****** Object:  StoredProcedure [dbo].[get_access_leaders]    Script Date: 9/13/2022 2:07:25 PM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE proc [dbo].[get_access_leaders]

@user_id int

as
begin


select name,category.id from category join admin_details on admin_details.cat_id = category.id where admin_details.user_id = @user_id and category.award_id = 3

end
GO
/****** Object:  StoredProcedure [dbo].[get_access_sites]    Script Date: 9/13/2022 2:07:25 PM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE proc [dbo].[get_access_sites]

@user_id int

as
begin


select name,category.id from category join admin_details on admin_details.cat_id = category.id where admin_details.user_id = @user_id and category.award_id = 5

end
GO
/****** Object:  StoredProcedure [dbo].[get_access_specialty]    Script Date: 9/13/2022 2:07:25 PM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE proc [dbo].[get_access_specialty]

@user_id int

as
begin


select name,category.id from category join admin_details on admin_details.cat_id = category.id where admin_details.user_id = @user_id and category.award_id = 7

end
GO
/****** Object:  StoredProcedure [dbo].[get_access_team]    Script Date: 9/13/2022 2:07:25 PM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE proc [dbo].[get_access_team]

@user_id int

as
begin


select name,category.id from category join admin_details on admin_details.cat_id = category.id where admin_details.user_id = @user_id and category.award_id = 8

end
GO
/****** Object:  StoredProcedure [dbo].[get_access_unit]    Script Date: 9/13/2022 2:07:25 PM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE proc [dbo].[get_access_unit]

@user_id int

as
begin


select name,category.id from category join admin_details on admin_details.cat_id = category.id where admin_details.user_id = @user_id and category.award_id = 2

end
GO
/****** Object:  StoredProcedure [dbo].[get_adminuser]    Script Date: 9/13/2022 2:07:25 PM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE proc [dbo].[get_adminuser]


as
begin


select * from users where  role >= 3

end
GO
/****** Object:  StoredProcedure [dbo].[get_awards]    Script Date: 9/13/2022 2:07:25 PM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
create proc [dbo].[get_awards]
as
begin
select award_name from awards 
end


GO
/****** Object:  StoredProcedure [dbo].[get_det_Corporation]    Script Date: 9/13/2022 2:07:25 PM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE proc [dbo].[get_det_Corporation]

@award_id int

as
begin


select * from Corporation  where cat_id = @award_id

end
GO
/****** Object:  StoredProcedure [dbo].[get_det_creativity]    Script Date: 9/13/2022 2:07:25 PM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE proc [dbo].[get_det_creativity]

@award_id int

as
begin


select * from creativity  where cat_id = @award_id

end
GO
/****** Object:  StoredProcedure [dbo].[get_det_employe]    Script Date: 9/13/2022 2:07:25 PM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE proc [dbo].[get_det_employe]

@award_id int

as
begin


select * from employe  where cat_id = @award_id

end
GO
/****** Object:  StoredProcedure [dbo].[get_det_leaders]    Script Date: 9/13/2022 2:07:25 PM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE proc [dbo].[get_det_leaders]

@award_id int

as
begin


select * from leaders  where cat_id = @award_id

end
GO
/****** Object:  StoredProcedure [dbo].[get_det_sites]    Script Date: 9/13/2022 2:07:25 PM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE proc [dbo].[get_det_sites]

@award_id int

as
begin


select * from sites  where cat_id = @award_id

end
GO
/****** Object:  StoredProcedure [dbo].[get_det_Specialty]    Script Date: 9/13/2022 2:07:25 PM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE proc [dbo].[get_det_Specialty]

@award_id int

as
begin


select * from Specialty  where cat_id = @award_id

end
GO
/****** Object:  StoredProcedure [dbo].[get_det_team]    Script Date: 9/13/2022 2:07:25 PM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE proc [dbo].[get_det_team]

@award_id int

as
begin


select * from team  where cat_id = @award_id

end
GO
/****** Object:  StoredProcedure [dbo].[get_det_unit]    Script Date: 9/13/2022 2:07:25 PM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE proc [dbo].[get_det_unit]

@award_id int

as
begin


select * from unit  where cat_id = @award_id

end
GO
/****** Object:  StoredProcedure [dbo].[get_user]    Script Date: 9/13/2022 2:07:25 PM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE proc [dbo].[get_user]

@username nvarchar (255) ,
@userpass nvarchar (255)

as
begin


select * from users where Username = @username and password = @userpass

end
GO
/****** Object:  StoredProcedure [dbo].[insert_taqeem]    Script Date: 9/13/2022 2:07:25 PM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE proc [dbo].[insert_taqeem]

@mark nvarchar(50),
@text nvarchar(MAX),
@cat_id int,
@user_id int

as
begin
insert into taqeem values (@mark,@text,@cat_id,@user_id) 
end
GO
/****** Object:  StoredProcedure [dbo].[select_Corporation]    Script Date: 9/13/2022 2:07:25 PM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE proc [dbo].[select_Corporation]

@user_award int

as
begin


select * from Corporation  where id = @user_award

end
GO
/****** Object:  StoredProcedure [dbo].[select_creativity]    Script Date: 9/13/2022 2:07:25 PM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE proc [dbo].[select_creativity]

@user_award int

as
begin


select * from creativity  where id = @user_award

end
GO
/****** Object:  StoredProcedure [dbo].[select_employe]    Script Date: 9/13/2022 2:07:25 PM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
create proc [dbo].[select_employe]

@user_award int

as
begin


select * from employe  where id = @user_award

end
GO
/****** Object:  StoredProcedure [dbo].[select_leaders]    Script Date: 9/13/2022 2:07:25 PM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
create proc [dbo].[select_leaders]

@user_award int

as
begin


select * from leaders  where id = @user_award

end
GO
/****** Object:  StoredProcedure [dbo].[select_sites]    Script Date: 9/13/2022 2:07:25 PM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
create proc [dbo].[select_sites]

@user_award int

as
begin


select * from sites  where id = @user_award

end
GO
/****** Object:  StoredProcedure [dbo].[select_Specialty]    Script Date: 9/13/2022 2:07:25 PM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
create proc [dbo].[select_Specialty]

@user_award int

as
begin


select * from Specialty  where id = @user_award

end
GO
/****** Object:  StoredProcedure [dbo].[select_taqeem_single]    Script Date: 9/13/2022 2:07:25 PM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE proc [dbo].[select_taqeem_single]


@cat_id int,
@user_id int

as
begin
declare @username nvarchar(255)
set @username = (select name from users where id = @user_id )
select users.name , taqeem.mark , taqeem.text from users,taqeem where users.id = @user_id and  cat_id =  @cat_id
end


GO
/****** Object:  StoredProcedure [dbo].[select_team]    Script Date: 9/13/2022 2:07:25 PM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
create proc [dbo].[select_team]

@user_award int

as
begin


select * from team  where id = @user_award

end
GO
/****** Object:  StoredProcedure [dbo].[select_unit]    Script Date: 9/13/2022 2:07:25 PM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
create proc [dbo].[select_unit]

@user_award int

as
begin


select * from unit  where id = @user_award

end
GO
/****** Object:  StoredProcedure [dbo].[select_user_admin]    Script Date: 9/13/2022 2:07:25 PM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE proc [dbo].[select_user_admin]

@user_id int

as
begin


select * from users where id=@user_id

end
GO
USE [master]
GO
ALTER DATABASE [Government Excellence] SET  READ_WRITE 
GO
